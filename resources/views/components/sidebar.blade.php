<aside class="hidden md:block left-0 top-0 flex h-screen w-64 flex-col overflow-y-hidden duration-300 ease-linear border-r-2 dark:bg-boxdark lg:static lg:translate-x-0">
      <!-- SIDEBAR HEADER -->
    
      <div
        class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear"
      >
        <!-- Sidebar Menu -->
        <nav class="mt-5 pl-4 mr-4 py-4 lg:mt-9 rounded-xl bg-gray-100 lg:px-6">
          <!-- Menu Group -->
          <div>
            <h3 class="mb-3 mt-1 ml-4 text-sm font-bold text-black">ADMIN MENU</h3>

            <ul class="mb-1 flex flex-col gap-1.5">
              <!-- Menu Item Dashboard -->
              <li>
                {{-- Dashboard --}}
                @if(Route::is('admin.dashboard') )
                <a class="group relative flex items-center gap-2.5 rounded-md px-4 py-2 text-orange-600 font-medium hover:text-orange-600 duration-300 ease-in-out hover:bg-gray-200 dark:hover:bg-meta-4" href="{{ route('admin.dashboard') }}">
                @else
                <a class="group relative flex items-center gap-2.5 rounded-md px-4 py-2 font-medium hover:text-orange-600 duration-300 ease-in-out hover:bg-gray-200 dark:hover:bg-meta-4" href="{{ route('admin.dashboard') }}">
                @endif
                  <svg class="fill-current" width="20" height="20" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.10322 0.956299H2.53135C1.5751 0.956299 0.787598 1.7438 0.787598 2.70005V6.27192C0.787598 7.22817 1.5751 8.01567 2.53135 8.01567H6.10322C7.05947 8.01567 7.84697 7.22817 7.84697 6.27192V2.72817C7.8751 1.7438 7.0876 0.956299 6.10322 0.956299ZM6.60947 6.30005C6.60947 6.5813 6.38447 6.8063 6.10322 6.8063H2.53135C2.2501 6.8063 2.0251 6.5813 2.0251 6.30005V2.72817C2.0251 2.44692 2.2501 2.22192 2.53135 2.22192H6.10322C6.38447 2.22192 6.60947 2.44692 6.60947 2.72817V6.30005Z"
                      fill="" />
                    <path d="M15.4689 0.956299H11.8971C10.9408 0.956299 10.1533 1.7438 10.1533 2.70005V6.27192C10.1533 7.22817 10.9408 8.01567 11.8971 8.01567H15.4689C16.4252 8.01567 17.2127 7.22817 17.2127 6.27192V2.72817C17.2127 1.7438 16.4252 0.956299 15.4689 0.956299ZM15.9752 6.30005C15.9752 6.5813 15.7502 6.8063 15.4689 6.8063H11.8971C11.6158 6.8063 11.3908 6.5813 11.3908 6.30005V2.72817C11.3908 2.44692 11.6158 2.22192 11.8971 2.22192H15.4689C15.7502 2.22192 15.9752 2.44692 15.9752 2.72817V6.30005Z"
                      fill="" />
                    <path d="M6.10322 9.92822H2.53135C1.5751 9.92822 0.787598 10.7157 0.787598 11.672V15.2438C0.787598 16.2001 1.5751 16.9876 2.53135 16.9876H6.10322C7.05947 16.9876 7.84697 16.2001 7.84697 15.2438V11.7001C7.8751 10.7157 7.0876 9.92822 6.10322 9.92822ZM6.60947 15.272C6.60947 15.5532 6.38447 15.7782 6.10322 15.7782H2.53135C2.2501 15.7782 2.0251 15.5532 2.0251 15.272V11.7001C2.0251 11.4188 2.2501 11.1938 2.53135 11.1938H6.10322C6.38447 11.1938 6.60947 11.4188 6.60947 11.7001V15.272Z"
                      fill="" />
                    <path d="M15.4689 9.92822H11.8971C10.9408 9.92822 10.1533 10.7157 10.1533 11.672V15.2438C10.1533 16.2001 10.9408 16.9876 11.8971 16.9876H15.4689C16.4252 16.9876 17.2127 16.2001 17.2127 15.2438V11.7001C17.2127 10.7157 16.4252 9.92822 15.4689 9.92822ZM15.9752 15.272C15.9752 15.5532 15.7502 15.7782 15.4689 15.7782H11.8971C11.6158 15.7782 11.3908 15.5532 11.3908 15.272V11.7001C11.3908 11.4188 11.6158 11.1938 11.8971 11.1938H15.4689C15.7502 11.1938 15.9752 11.4188 15.9752 11.7001V15.272Z"
                      fill="" />
                  </svg>
                  Dashboard
                </a>

                {{-- Users --}}
                @if(Route::is('users.index') )
                <a class="group relative flex items-center gap-2.5 rounded-md px-4 py-2 text-orange-600 font-medium hover:text-orange-600 duration-300 ease-in-out hover:bg-gray-200 dark:hover:bg-meta-4 active:text-orange-600"
                href="{{ route('users.index') }}">
                @else
                <a class="group relative flex items-center gap-2.5 rounded-md px-4 py-2 font-medium hover:text-orange-600 duration-300 ease-in-out hover:bg-gray-200 dark:hover:bg-meta-4 active:text-orange-600"
                href="{{ route('users.index') }}">
                @endif
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                        <path d="M10 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM3.465 14.493a1.23 1.23 0 0 0 .41 1.412A9.957 9.957 0 0 0 10 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 0 0-13.074.003Z" />
                    </svg>
                    Users
                </a>

                @if(Route::is('posts.index') )
                <a class="group relative flex items-center gap-2.5 rounded-md px-4 py-2 text-orange-600 font-medium hover:text-orange-600 duration-300 ease-in-out hover:bg-gray-200 dark:hover:bg-meta-4 "
                href="{{ route('posts.index') }}">
                @else
                <a class="group relative flex items-center gap-2.5 rounded-md px-4 py-2 font-medium hover:text-orange-600 duration-300 ease-in-out hover:bg-gray-200 dark:hover:bg-meta-4 "
                href="{{ route('posts.index') }}">
                @endif
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                        <path fill-rule="evenodd" d="M9.493 2.852a.75.75 0 0 0-1.486-.204L7.545 6H4.198a.75.75 0 0 0 0 1.5h3.14l-.69 5H3.302a.75.75 0 0 0 0 1.5h3.14l-.435 3.148a.75.75 0 0 0 1.486.204L7.955 14h2.986l-.434 3.148a.75.75 0 0 0 1.486.204L12.456 14h3.346a.75.75 0 0 0 0-1.5h-3.14l.69-5h3.346a.75.75 0 0 0 0-1.5h-3.14l.435-3.148a.75.75 0 0 0-1.486-.204L12.045 6H9.059l.434-3.148ZM8.852 7.5l-.69 5h2.986l.69-5H8.852Z" clip-rule="evenodd" />
                    </svg>
                    Posts
                </a>

                @if(Route::is('parameters.index') )
                <a class="group relative flex items-center gap-2.5 rounded-md px-4 py-2 text-orange-600 font-medium hover:text-orange-600 duration-300 ease-in-out hover:bg-gray-200 dark:hover:bg-meta-4 "
                    href="{{ route('parameters.index') }}">
                @else
                <a class="group relative flex items-center gap-2.5 rounded-md px-4 py-2 font-medium hover:text-orange-600 duration-300 ease-in-out hover:bg-gray-200 dark:hover:bg-meta-4 "
                    href="{{ route('parameters.index') }}">
                @endif
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                        <path d="M10 3.75a2 2 0 1 0-4 0 2 2 0 0 0 4 0ZM17.25 4.5a.75.75 0 0 0 0-1.5h-5.5a.75.75 0 0 0 0 1.5h5.5ZM5 3.75a.75.75 0 0 1-.75.75h-1.5a.75.75 0 0 1 0-1.5h1.5a.75.75 0 0 1 .75.75ZM4.25 17a.75.75 0 0 0 0-1.5h-1.5a.75.75 0 0 0 0 1.5h1.5ZM17.25 17a.75.75 0 0 0 0-1.5h-5.5a.75.75 0 0 0 0 1.5h5.5ZM9 10a.75.75 0 0 1-.75.75h-5.5a.75.75 0 0 1 0-1.5h5.5A.75.75 0 0 1 9 10ZM17.25 10.75a.75.75 0 0 0 0-1.5h-1.5a.75.75 0 0 0 0 1.5h1.5ZM14 10a2 2 0 1 0-4 0 2 2 0 0 0 4 0ZM10 16.25a2 2 0 1 0-4 0 2 2 0 0 0 4 0Z" />
                    </svg>
                    Parameters
                </a>
            </ul>
          </div>
</aside>