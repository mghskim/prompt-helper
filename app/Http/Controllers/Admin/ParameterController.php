<?php


namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Storage;
    use App\Models\Parameter;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    
    class ParameterController extends Controller
    {
        private function authorizeParamUpdate(Parameter $param) 
        {
            return auth()->user()->id === $param->user_id;
        }

        public function index()
        {
            if (!auth()->check()) {
                return redirect('/login');
            }
            $parameters = Parameter::paginate(10); // 10 items per page
            return view('admin.parameters.index', compact('parameters'));
        }    

        // Show the form for creating a new parameter
        public function create()
        {
            return view('admin.parameters.create');
        }


        public function store(Request $request)
        {
            // return redirect()->route('parameters.index')->with('success', Auth::id());
            // Validate and store a new parameter
            $incomingFields = $request->validate([
                'name' => 'required|string|max:255|unique:parameters,name,',
                'type' => 'required',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4096',
                'text_color' => 'nullable|string|max:7',
                'custom' => 'nullable|boolean',
            ]);

            $incomingFields['param_name'] = strip_tags($incomingFields['name']);
            $incomingFields['param_type'] = strip_tags($incomingFields['type']);
            if (isset($incomingFields['image'])) {
                $incomingFields['param_image'] = strip_tags($incomingFields['image']);
            }
            $incomingFields['text_color'] = strip_tags($incomingFields['text_color']);

            $imagePath = null;
            if ($request->hasFile('image')) {
                $ext = $request->file('image')->extension();
                $fileName = strtolower($incomingFields['param_name']);
                $fileName = str_replace(' ', '-', $fileName);
                $imagePath = $request->file('image')->storeAs('/parameters', $fileName . '.' . $ext,'public');
            }

            Parameter::create([
                'user_id' => Auth::id(),
                'name' => $incomingFields['param_name'],
                'type' => $incomingFields['param_type'],
                'image' => $imagePath,
                'text_color' => $incomingFields['text_color'],
                'custom' => $request->custom ?? false,
            ]);
            

            return redirect()->route('parameters.index')->with('success', 'Parameter created successfully.');
        }
    
        public function edit(Parameter $parameter)
        {
            if (!auth()->check()) {
                return redirect('/login');
            }
            // Show form for editing the parameter
            return view('admin.parameters.edit', compact('parameter'));
        }
    
        public function update(Request $request, Parameter $parameter)
        {
            // Validate and update the parameter
            $request->validate([
                'name' => 'required|string|max:255|unique:parameters,name,' . $parameter->id,
                'type' => 'required',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048|dimensions:width=1024,height=1024',
                'text_color' => 'nullable|string|max:7',
                'custom' => 'nullable|boolean',
            ]);

            $imagePath = $parameter->image;
            if ($request->hasFile('image')) {
                // Delete the old image if a new one is uploaded
                if ($imagePath) {
                    Storage::disk('public')->delete($parameter->image);
                }
                $imagePath = $request->file('image')->store('parameters', 'public');
            }

            $parameter->update([
                'user_id' => Auth::id(),
                'name' => $request->name,
                'type' => $request->type,
                'image' => $imagePath,
                'text_color' => $request->text_color,
                'custom' => $request->custom ?? false,
            ]);
    
            return redirect()->route('parameters.index')->with('success', 'Parameter updated successfully.');
        }
    
        public function destroy(Parameter $parameter)
        {
            if ($this->authorizeParamUpdate($parameter)){
                if ($parameter->image) {
                    Storage::disk('public')->delete($parameter->image);
                }

                $parameter->delete();
            }
            // Delete the parameter
    
            return redirect()->route('parameters.index')->with('success', 'Parameter deleted successfully.');
        }

}