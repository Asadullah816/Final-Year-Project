     @php
         function activeTab($name)
         {
             return Route::currentRouteName($name) === $name ? 'active' : '';
         }
     @endphp
     <div class="sidebar pe-4 pb-3">
         <nav class="navbar bg-secondary navbar-dark">
             <a href="{{ route('home') }}" class="navbar-brand mx-4 mb-3">
                 <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>@yield('name', 'Dashboard')</h3>
             </a>
             <div class="d-flex align-items-center ms-4 mb-4">
                 <div class="position-relative">
                     <img class="rounded-circle" src="{{ asset('admin/img/user.jpg') }}" alt=""
                         style="width: 40px; height: 40px;">
                     <div
                         class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                     </div>
                 </div>
                 @auth
                     <div class="ms-3">
                         <h6 class="mb-0">{{ auth()->user()->name }}</h6>
                         @if (auth()->user()->admin == true)
                             <span>Admin</span>
                         @else
                             <span>User</span>
                         @endif
                     </div>
                 @endauth
             </div>
             <div class="navbar-nav w-100">
                 @if (auth()->user()->admin == true)
                     <a href="{{ route('dashboard') }}" class="{{ activeTab('dashboard') }} nav-item nav-link "><i
                             class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                     <a href="{{ route('courses') }}" class="{{ activeTab('courses') }} nav-item nav-link"><i
                             class="fa fa-th me-2"></i>Courses</a>
                     <a href="{{ route('addcourse') }}" class="{{ activeTab('addcourse') }} nav-item nav-link"><i
                             class="fa fa-keyboard me-2"></i>Add
                         Course</a>
                     <a href="{{ route('addcategory') }}" class="{{ activeTab('addcategory') }} nav-item nav-link"><i
                             class="fa fa-keyboard me-2"></i>Add
                         Category</a>
                     <a href="{{ route('applications') }}"
                         class="{{ activeTab('applications') }} nav-item nav-link"><i
                             class="fa fa-table me-2"></i>Applications </a>
                     <a href="{{ route('users') }}" class="{{ activeTab('users') }} nav-item nav-link"><i
                             class="fa fa-table me-2"></i>Total Users </a>
                 @else
                     <a href="{{ route('dashboard') }}" class="{{ activeTab('dashboard') }} nav-item nav-link "><i
                             class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                     <a href="{{ route('qualification') }}"
                         class="{{ activeTab('qualification') }}  nav-item nav-link"><i
                             class="fa fa-table me-2"></i>Add
                         Qualifications</a>
                     <a href="{{ route('addinfo') }}" class="{{ activeTab('qualification') }}  nav-item nav-link"><i
                             class="fa fa-table me-2"></i>Add
                         Information</a>
                     <a href="{{ route('profile') }}" class="{{ activeTab('profile') }} nav-item nav-link"><i
                             class="fa fa-table me-2"></i>Qualifications </a>
                     <a href="{{ route('applications') }}"
                         class="{{ activeTab('applications') }} nav-item nav-link"><i
                             class="fa fa-table me-2"></i>Applications </a>
                 @endif

                 {{-- <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
                 <div class="nav-item dropdown">
                     <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                             class="far fa-file-alt me-2"></i>Pages</a>
                     <div class="dropdown-menu bg-transparent border-0">
                         <a href="signin.html" class="dropdown-item">Sign In</a>
                         <a href="signup.html" class="dropdown-item">Sign Up</a>
                         <a href="404.html" class="dropdown-item">404 Error</a>
                         <a href="blank.html" class="dropdown-item">Blank Page</a>
                     </div>
                 </div> --}}
             </div>
         </nav>
     </div>
