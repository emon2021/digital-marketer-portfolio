<!-- navbar  -->
<nav class="navbar navbar-expand-lg bg-dark overflow-hidden">
    <div class="container">
        <div class="" style="width: 100%;">
            <div class=" float-start logo" style="width: 3rem;">
                <a href="{{ route('home') }}" class="navbar-brand text-light" style="width: 5rem;">
                    @php
                        $setting = App\Models\Setting::first();
                    @endphp
                    <img src="{{ asset($setting->front_logo) }}" width="100%"  alt="">
                </a>
            </div>
            
                <div class="nav_items  d-flex justify-content-end align-items-end float-end collapse navbar-collapse">
                    
                    <ul class="navbar-nav">
                        @if(!Request::routeIs('blog.view'))
                        <li class="nav-item">
                            <a href="#home" class="nav-link ">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#service_special" class="nav-link ">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="#resume" class="nav-link ">Resume</a>
                        </li>
                        <li class="nav-item">
                            <a href="#testimonial" class="nav-link ">Testimonials</a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a href="#article_blog" class="nav-link ">Blogs</a>
                        </li>
                        @if(!Request::routeIs('blog.view'))
                        <li class="nav-item">
                            <a href="#contact" class="nav-link ">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="rounded-5 text-light btn btn-outline-success">Hire Me!</a>
                        </li>
                        @endif
                    </ul>
                </div>
        </div>
        <!-- offcanvas  -->
        <div class="off_canvas d-none float-end d-flex justify-content-end align-items-end">
            <button class="btn bg-transparent text-light " style="transform:scale(1.7)" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <span class="material-symbols-outlined">
                    apps
                </span>
            </button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
              <div class="offcanvas-header">
                <a href="#home" class="offcanvas-title" id="offcanvasRightLabel" style="width: 3rem;">
                    <img src="{{ asset('public/frontend') }}/assets/images/logo/kaizen-logo.png" width="100%" alt="">
                </a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <ul class="navbar-nav">
                    <li class="nav-item " >
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item " >
                        <a href="#service_special" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="#resume" class="nav-link">Resume</a>
                    </li>
                    <li class="nav-item">
                        <a href="#testimonial" class="nav-link">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a href="#article_blog" class="nav-link">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contact</a>
                    </li>
                </ul>
              </div>
            </div>
        </div>
    </div>
 </nav>
<!-- navbar.end  -->