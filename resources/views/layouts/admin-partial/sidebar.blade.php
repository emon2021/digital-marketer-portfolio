  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 " >
    <!-- Brand Logo -->
    <a href="{{ route('admin.index') }}" class="brand-link d-flex justify-content-center">
      @php
        $setting = App\Models\Setting::first();
      @endphp
      
      <div class="">
        <img src="{{ asset($setting->back_logo)  }}" width="60" alt="">
      </div>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('public/backend') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{ route('admin.index') }}" class="nav-link " style="background-color: #20BF6B">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item @if(Request::url() == route('header.create')|| Request::url()==route('blog.create') || Request::url()==route('education.create') || Request::url()== route('about.title_create')|| Request::url()==route('testimonial.create') || Request::url() == route('services.create')|| Request::url() == route('resume.create')|| Request::url() == route('experience.create')) menu-is-openning menu-open @endif">
            <a href="#" class="nav-link"> 
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Upload Title Contents
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('header.create') }}" class="nav-link @if(Request::url() == route('header.create')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Header Content</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('services.create') }}" class="nav-link @if(Request::url() == route('services.create')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Service Title</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('resume.create') }}" class="nav-link @if(Request::url() == route('resume.create')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Resume Title</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('experience.create') }}" class="nav-link @if(Request::url() == route('experience.create')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Experience Title</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('education.create') }}" class="nav-link @if(Request::url() == route('education.create')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Education Title</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('about.title_create') }}" class="nav-link @if(Request::url() == route('about.title_create')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About Title</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('testimonial.create') }}" class="nav-link @if(Request::url() == route('testimonial.create')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Testimonial Title</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('blog.create') }}" class="nav-link @if(Request::url() == route('blog.create')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blog Title</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item @if(Request::url() == route('experience.index')||Request::url() == route('about.create')||Request::url() == route('education.index')) menu-is-openning menu-open @endif">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Resume Contents
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('experience.index') }}" class="nav-link @if(Request::url() == route('experience.index')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Experiences</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('education.index') }}" class="nav-link @if(Request::url() == route('education.index')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Educations</p>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a href="" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Skills</p>
                </a>
              </li> --}}
              <li class="nav-item">
                <a href="{{ route('about.create') }}" class="nav-link @if(Request::url()==route('about.create')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item ">
            <a href="{{ route('services.index') }}" class="nav-link @if(Request::url() == route('services.index') ) active @endif">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Services
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="{{ route('testimonial.index') }}" class="nav-link @if(Request::url() == route('testimonial.index') ) active @endif">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Testimonial
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="{{ route('blog.index') }}" class="nav-link @if(Request::url() == route('blog.index') ) active @endif">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Blogs
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="{{ route('settings.create') }}" class="nav-link @if(Request::url() == route('settings.create') ) active @endif">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Settings
              </p>
            </a>
          </li>
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="{{ route('password.change') }}" class="nav-link @if(Request::url() == route('password.change')) active @endif" >
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Change Password</p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="#" class="nav-link" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Logout</p>
            </a>
          </li>
          <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        <li class="nav-item">
          <a href="#" class="nav-link" >
            {{-- <i class="nav-icon far fa-circle text-info"></i> --}}
            <p></p>
          </a>
        </li><li class="nav-item">
          <a href="#" class="nav-link" >
            {{-- <i class="nav-icon far fa-circle text-info"></i> --}}
            <p></p>
          </a>
        </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>



  {{-- onclick="event.preventDefault();
           document.getElementById('logout-form').submit();" --}}
          {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form> --}}