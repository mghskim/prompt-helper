<?php

namespace App\Livewire;

use App\Models\Role;
use App\Models\User;
use Livewire\Component;

class ManageUsers extends Component
{
    public $userId;
    public $roleId;

    public function assignRoleToUser()
    {
        $user = User::find($this->userId);
        $role = Role::find($this->roleId);

        if ($user && $role) {
            $user->assignRole($role);
            // session()->flash('message', 'Role assigned successfully.');
            return redirect()->route('manage-users')->with('message', 'Role assigned successfully.');
        } else {
            // session()->flash('error', 'User or Role not found.');
            return redirect()->route('manage-users')->with('error', 'User or Role not found.');
        }
    }

    public function render()
    {
        return view('livewire.manage-users', ['roles' => Role::all(),]);
    }
}
