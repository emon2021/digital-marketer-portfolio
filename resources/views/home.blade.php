@extends('layouts.app')
@section('content')
            
    <!-- header  -->
    <header id="main_header" class="common_style">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ">
                    <div class="card border-0 bg-transparent p-2">
                        <div class="card-body">
                            <div class="title_name">
                                <h5 class="title">{{ $header->designation }}</h5>
                                <h1 class="name">
                                    <span class="hello_part">{{ $header->greetings }}</span>
                                    <br>
                                    <span class="main_name">{{ $header->name }}</span>
                                </h1>
                                <p class="description mt-4">
                                    {{ str($header->description)->squish() }}
                                </p>
                                <div class="button_wrapper mt-5">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="{{ $header->resume }}" class="btn btn-outline-success text-uppercase rounded-5 w-100" download="{{ $header->name.'.pdf' }}">Download Cv</a>
                                        </div>
                                        <div class="col-md-6 social_media d-flex justify-content-evenly">
                                            <a href="#" class="btn btn-outline-success text-light rounded-5" >
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                            <a href="#" class="btn btn-outline-success text-light rounded-5" >
                                                <i class="fa-brands fa-linkedin-in"></i>
                                            </a>
                                            <a href="#" class="btn btn-outline-success text-light rounded-5" >
                                                <i class="fa-brands fa-github"></i>
                                            </a>
                                            <a href="#" class="btn btn-outline-success text-light rounded-5" >
                                                <i class="fa-brands fa-twitter"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center justify-content-center">
                    <div class="img_wrapper">
                        <img src="{{ $header->image }}" alt="">
                    </div>
                </div>
            </div>
        </div>
     </header>
    <!-- header.end  -->
    <!-- service.special  -->
     <section id="service_special" class="common_style">
        <div class="container">
            <div class="row">
                <div class="service_title col-md-12 text-center pb-5">
                    <div class="common_title_style">
                        <h5> - What The Special - </h5>
                        <h1>Want to boost your business growth? </h1>
                        <h1>Solution is here! </h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card p-4 service_box bg-transparent ">
                        <div class="card-body">
                            <div class="card_icon" style="width: 8rem;">
                                <img src="{{ asset('public/frontend') }}/assets/images/social-media-marketing.png" width="100%" alt="">
                            </div>
                            <h3 class="card_title pt-3 ">Social Media Marketing</h3>
                            <p class="card_description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis temporibus, dignissimos ipsam consectetur hic impedit ut totam natus nisi architecto dolor reprehenderit reiciendis quia, pariatur blanditiis eius earum odio eum.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card p-4 service_box service_box_2 bg-transparent ">
                        <div class="card-body">
                            <div class="card_icon" style="width: 8rem;">
                                <img src="{{ asset('public/frontend') }}/assets/images/analytics.png" width="100%" alt="">
                            </div>
                            <h3 class="card_title pt-3 ">Market Analysis</h3>
                            <p class="card_description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis temporibus, dignissimos ipsam consectetur hic impedit ut totam natus nisi architecto dolor reprehenderit reiciendis quia, pariatur blanditiis eius earum odio eum.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4 seo_consultency">
                    <div class="card p-4 service_box service_box_3 bg-transparent ">
                        <div class="card-body">
                            <div class="card_icon" style="width: 8rem;">
                                <img src="{{ asset('public/frontend') }}/assets/images/seo.png" width="100%" alt="">
                            </div>
                            <h3 class="card_title pt-3 ">SEO Consultancy</h3>
                            <p class="card_description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis temporibus, dignissimos ipsam consectetur hic impedit ut totam natus nisi architecto dolor reprehenderit reiciendis quia, pariatur blanditiis eius earum odio eum.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4 page_rangking">
                    <div class="card p-4 service_box service_box_4 bg-transparent ">
                        <div class="card-body">
                            <div class="card_icon" style="width: 8rem;">
                                <img src="{{ asset('public/frontend') }}/assets/images/ranking.png" width="100%" alt="">
                            </div>
                            <h3 class="card_title pt-3 ">Page Ranking</h3>
                            <p class="card_description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis temporibus, dignissimos ipsam consectetur hic impedit ut totam natus nisi architecto dolor reprehenderit reiciendis quia, pariatur blanditiis eius earum odio eum.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!-- service.special.end -->

    <!-- resume.why.me -->
     <section id="resume" class="common_style">
        <div class="container">
            <div class="row">
                <div class="service_title col-md-12 text-center pb-5">
                    <div class="common_title_style">
                        <h5> - Resume - </h5>
                        <h1>Why Choose Me? </h1>
                        <h1>Let's go to explore me! </h1>
                    </div>
                </div>
                <div class="resume_wrapper">
                    <div class="col-md-4 float-start" style="color: var(--main-text-color);">
                        <h1 class="resume_title">Why Hire Me?</h1>
                        <p class="resume_description card_description pb-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti velit ipsum reiciendis?
                        </p>
                        <a href="" data-target = "tab-1" class="resume_active btn btn-success d-block fs-5 mb-4 tab common_resume experience">Experiences</a>
                        <a href="" data-target = "tab-2" class="btn btn-success d-block fs-5 mb-4 tab common_resume education">Educations</a>
                        <a href="" data-target = "tab-3" class="btn btn-success d-block fs-5 mb-4 tab common_resume skills">Skills</a>
                        <a href="" data-target = "tab-4" class="btn btn-success d-block fs-5 mb-4 tab common_resume about_me">About Me</a>
                    </div>
                    <!-- resume.experience  -->
                    <div id="tab-1" class="col-md-8 float-end px-5 resume_default resume_experience" >
                        <div class="resume_partial pb-4" style="color: var(--main-text-color);">
                            <h1 class="partial_title">My Experience</h1>
                            <p class="card_description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti velit ipsum reiciendis?
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti velit ipsum reiciendis?
                            </p>
                        </div>
                        <div class="row overflow-y-scroll" id="resume_ex" style="height: 250px;">
                            <div class="col-md-6">
                                <div class="ex_card mt-4">
                                    <div class="card ex_card_wrapper border-0">
                                        <div class="card-body ex_card_body"  style="color: var(--main-text-color);">
                                            <h6>2023-Present</h6>
                                            <h3>SEO Specialist</h3>
                                            <ul>
                                                <li>Kaizen IT Ltd.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ex_card mt-4">
                                    <div class="card ex_card_wrapper border-0">
                                        <div class="card-body ex_card_body"  style="color: var(--main-text-color);">
                                            <h6>2023-Present</h6>
                                            <h3>SEO Specialist</h3>
                                            <ul>
                                                <li>Kaizen IT Ltd.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ex_card mt-4">
                                    <div class="card ex_card_wrapper border-0">
                                        <div class="card-body ex_card_body"  style="color: var(--main-text-color);">
                                            <h6>2023-Present</h6>
                                            <h3>SEO Specialist</h3>
                                            <ul>
                                                <li>Kaizen IT Ltd.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ex_card mt-4">
                                    <div class="card ex_card_wrapper border-0">
                                        <div class="card-body ex_card_body"  style="color: var(--main-text-color);">
                                            <h6>2023-Present</h6>
                                            <h3>SEO Specialist</h3>
                                            <ul>
                                                <li>Kaizen IT Ltd.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ex_card mt-4">
                                    <div class="card ex_card_wrapper border-0">
                                        <div class="card-body ex_card_body"  style="color: var(--main-text-color);">
                                            <h6>2023-Present</h6>
                                            <h3>SEO Specialist</h3>
                                            <ul>
                                                <li>Kaizen IT Ltd.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ex_card mt-4">
                                    <div class="card ex_card_wrapper border-0">
                                        <div class="card-body ex_card_body"  style="color: var(--main-text-color);">
                                            <h6>2023-Present</h6>
                                            <h3>SEO Specialist</h3>
                                            <ul>
                                                <li>Kaizen IT Ltd.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- resume.education  -->
                    <div id="tab-2" class="col-md-8 float-end px-5 resume_default d_none resume_education" >
                        <div class="resume_partial pb-4" style="color: var(--main-text-color);">
                            <h1 class="partial_title">My Education</h1>
                            <p class="card_description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti velit ipsum reiciendis?
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti velit ipsum reiciendis?
                            </p>
                        </div>
                        <div class="row overflow-y-scroll" id="resume_ex" style="height: 250px;">
                            <div class="col-md-6">
                                <div class="ex_card mt-4">
                                    <div class="card ex_card_wrapper border-0">
                                        <div class="card-body ex_card_body"  style="color: var(--main-text-color);">
                                            <h6>2020-2024</h6>
                                            <h3>Diploma In CST</h3>
                                            <ul>
                                                <li>Faridpur Polytechnic Institute.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ex_card mt-4">
                                    <div class="card ex_card_wrapper border-0">
                                        <div class="card-body ex_card_body"  style="color: var(--main-text-color);">
                                            <h6>2013-2019</h6>
                                            <h3>SSC</h3>
                                            <ul>
                                                <li>Sonatala High School.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ex_card mt-4">
                                    <div class="card ex_card_wrapper border-0">
                                        <div class="card-body ex_card_body"  style="color: var(--main-text-color);">
                                            <h6>2022-2023</h6>
                                            <h3>Programming In PHP</h3>
                                            <ul>
                                                <li>Kaizen IT Ltd.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ex_card mt-4">
                                    <div class="card ex_card_wrapper border-0">
                                        <div class="card-body ex_card_body"  style="color: var(--main-text-color);">
                                            <h6>2023-Present</h6>
                                            <h3>Web Development</h3>
                                            <ul>
                                                <li>Kaizen IT Ltd.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ex_card mt-4">
                                    <div class="card ex_card_wrapper border-0">
                                        <div class="card-body ex_card_body"  style="color: var(--main-text-color);">
                                            <h6>2023-Present</h6>
                                            <h3>Digital Marketing</h3>
                                            <ul>
                                                <li>Kaizen IT Ltd.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ex_card mt-4">
                                    <div class="card ex_card_wrapper border-0">
                                        <div class="card-body ex_card_body"  style="color: var(--main-text-color);">
                                            <h6>2023-Present</h6>
                                            <h3>SEO Specialist</h3>
                                            <ul>
                                                <li>Kaizen IT Ltd.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- resume.skill -->
                    <div id="tab-3" class="col-md-8 float-end px-5 resume_default d_none resume_skill" >
                        <div class="resume_partial pb-4" style="color: var(--main-text-color);">
                            <h1 class="partial_title">My Skills</h1>
                            <p class="card_description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti velit ipsum reiciendis?
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti velit ipsum reiciendis?
                            </p>
                        </div>
                        <div class="row overflow-y-scroll" id="resume_ex" style="height: 250px;">
                            <div class="col-md-3">
                                <div class="ex_card mt-4">
                                    <div class="card ex_card_wrapper border-0">
                                        <div class="card-body ex_card_body text-center"  style="color: var(--main-text-color);">
                                            <i class="fa-brands fa-html5"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="ex_card mt-4">
                                    <div class="card ex_card_wrapper border-0">
                                        <div class="card-body ex_card_body text-center"  style="color: var(--main-text-color);">
                                            <i class="fa-brands fa-square-js"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="ex_card mt-4">
                                    <div class="card ex_card_wrapper border-0">
                                        <div class="card-body ex_card_body text-center"  style="color: var(--main-text-color);">
                                            <i class="fa-brands fa-css3"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="ex_card mt-4">
                                    <div class="card ex_card_wrapper border-0">
                                        <div class="card-body ex_card_body text-center"  style="color: var(--main-text-color);">
                                            <i class="fa-brands fa-bootstrap"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="ex_card mt-4">
                                    <div class="card ex_card_wrapper border-0">
                                        <div class="card-body ex_card_body text-center"  style="color: var(--main-text-color);">
                                            <i class="fa-brands fa-php"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="ex_card mt-4">
                                    <div class="card ex_card_wrapper border-0">
                                        <div class="card-body ex_card_body text-center"  style="color: var(--main-text-color);">
                                            <i class="fa-solid fa-database"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="ex_card mt-4">
                                    <div class="card ex_card_wrapper border-0">
                                        <div class="card-body ex_card_body text-center"  style="color: var(--main-text-color);">
                                            <i class="fa-solid fa-code"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="ex_card mt-4">
                                    <div class="card ex_card_wrapper border-0">
                                        <div class="card-body ex_card_body text-center"  style="color: var(--main-text-color);">
                                            <i class="fa-brands fa-git-alt"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="ex_card mt-4">
                                    <div class="card ex_card_wrapper border-0">
                                        <div class="card-body ex_card_body text-center"  style="color: var(--main-text-color);">
                                            <i class="fa-brands fa-html5"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="ex_card mt-4">
                                    <div class="card ex_card_wrapper border-0">
                                        <div class="card-body ex_card_body text-center"  style="color: var(--main-text-color);">
                                            <i class="fa-brands fa-searchengin"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="ex_card mt-4">
                                    <div class="card ex_card_wrapper border-0">
                                        <div class="card-body ex_card_body text-center"  style="color: var(--main-text-color);">
                                            <i class="fa-brands fa-laravel"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="ex_card mt-4">
                                    <div class="card  ex_card_wrapper border-0">
                                        <div class="card-body ex_card_body text-center"  style="color: var(--main-text-color);">
                                            <i class="fa-brands fa-html5"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- resume.about.me  -->
                    <div id="tab-4" class="col-md-8 float-end px-5 resume_default d_none resume_about" >
                        <div class="resume_partial pb-4" style="color: var(--main-text-color);">
                            <h1 class="partial_title">About Me</h1>
                            <p class="card_description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti velit ipsum reiciendis?
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti velit ipsum reiciendis?
                            </p>
                        </div>
                        <div class="row overflow-y-scroll" id="resume_ex" style="height: 250px;">
                            <div class="col-md-6">
                                <div class="ex_card mt-4">
                                    <div class="card ex_card_wrapper border-0 bg-transparent">
                                        <div class="card-body ex_card_body"  style="color: var(--main-text-color);">
                                            <div class="about_items">
                                                <span style="color: rgb(140, 140, 140); margin-right: 5px;">Name: </span>
                                                <span style="color: var(--main-text-color); font-size: 18px;"> Ahmed Limon</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ex_card mt-4">
                                    <div class="card ex_card_wrapper border-0 bg-transparent">
                                        <div class="card-body ex_card_body"  style="color: var(--main-text-color);">
                                            <div class="about_items">
                                                <span style="color: rgb(140, 140, 140); margin-right: 5px;">Phone: </span>
                                                <span style="color: var(--main-text-color); font-size: 18px;"> +880 18453-55609</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ex_card mt-4">
                                    <div class="card ex_card_wrapper border-0 bg-transparent">
                                        <div class="card-body ex_card_body"  style="color: var(--main-text-color);">
                                            <div class="about_items">
                                                <span style="color: rgb(140, 140, 140); margin-right: 5px;">Experience: </span>
                                                <span style="color: var(--main-text-color); font-size: 18px;"> 3+ Years.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ex_card mt-4">
                                    <div class="card ex_card_wrapper border-0 bg-transparent">
                                        <div class="card-body ex_card_body"  style="color: var(--main-text-color);">
                                            <div class="about_items">
                                                <span style="color: rgb(140, 140, 140); margin-right: 5px;">WhatsApp: </span>
                                                <span style="color: var(--main-text-color); font-size: 18px;"> +880 18453-88609</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ex_card mt-4">
                                    <div class="card ex_card_wrapper border-0 bg-transparent">
                                        <div class="card-body ex_card_body"  style="color: var(--main-text-color);">
                                            <div class="about_items">
                                                <span style="color: rgb(140, 140, 140); margin-right: 5px;">Nationality: </span>
                                                <span style="color: var(--main-text-color); font-size: 18px;"> Banladeshi.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ex_card mt-4">
                                    <div class="card ex_card_wrapper border-0 bg-transparent">
                                        <div class="card-body ex_card_body"  style="color: var(--main-text-color);">
                                            <div class="about_items">
                                                <span style="color: rgb(140, 140, 140); margin-right: 5px;">Email: </span>
                                                <span style="color: var(--main-text-color); font-size: 18px;"> ahmedemon.dev24@gmail.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ex_card mt-4">
                                    <div class="card ex_card_wrapper border-0 bg-transparent">
                                        <div class="card-body ex_card_body"  style="color: var(--main-text-color);">
                                            <div class="about_items">
                                                <span style="color: rgb(140, 140, 140); margin-right: 5px;">Freelance: </span>
                                                <span style="color: var(--main-text-color); font-size: 18px;"> Available</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ex_card mt-4">
                                    <div class="card ex_card_wrapper border-0 bg-transparent">
                                        <div class="card-body ex_card_body"  style="color: var(--main-text-color);">
                                            <div class="about_items">
                                                <span style="color: rgb(140, 140, 140); margin-right: 5px;">Languages: </span>
                                                <span style="color: var(--main-text-color); font-size: 18px;"> English & Bangla</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!-- resume.why.me.end -->
    
    <!-- testimonial -->
     <section id="testimonial" class="common_style">
        <div class="container">
            <div class="row">
                <div class="service_title col-md-12 text-center pb-5">
                    <div class="common_title_style">
                        <h5> - Testimonial - </h5>
                        <h1>What client say about me? </h1>
                    </div>
                </div>
                <!-- testimonial.carousel  -->
                <div class="col-md-12">
                    <div id="testimonial-slider" class="owl-carousel owl-theme">
                        <div class="testimonial">
                            <div class="testimonial_content">
                                <div class="testimonial_icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p class="testimonial_description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dolor sit amet eros imperdiet, sit amet hendrerit nisi vehicula.
                                </p>
                            </div>
                            <h3 class="testimonial_title">Imran</h3>
                            <span class="testimonial_post">Digital Marketer</span>
                        </div>
    
                        <div class="testimonial">
                            <div class="testimonial_content">
                                <div class="testimonial_icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p class="testimonial_description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dolor sit amet eros imperdiet, sit amet hendrerit nisi vehicula.
                                </p>
                            </div>
                            <h3 class="testimonial_title">Sazzad</h3>
                            <span class="testimonial_post">Web Designer</span>
                        </div>
    
                        <div class="testimonial">
                            <div class="testimonial_content">
                                <div class="testimonial_icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p class="testimonial_description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dolor sit amet eros imperdiet, sit amet hendrerit nisi vehicula.
                                </p>
                            </div>
                            <h3 class="testimonial_title">Tanvir</h3>
                            <span class="testimonial_post">SEO Specialist</span>
                        </div>
    
                        <div class="testimonial">
                            <div class="testimonial_content">
                                <div class="testimonial_icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p class="testimonial_description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dolor sit amet eros imperdiet, sit amet hendrerit nisi vehicula.
                                </p>
                            </div>
                            <h3 class="testimonial_title">Emon</h3>
                            <span class="testimonial_post">Web Developer</span>
                        </div>
                    </div>
                </div>
                <!-- testimonial.carousel.end -->
            </div>
        </div>
     </section>
    <!-- testimonial.end -->

    <!-- client.partner  -->
     <section id="client" class="common_style ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="client_partner" class="client_wrapper d-flex align-items-center justify-content-center owl-carousel">
                        <div class="client_logo">
                            <i class="fa-solid fa-truck-fast"></i>
                        </div>
                        <div class="client_logo">
                            <i class="fa-brands fa-github"></i>
                        </div>
                        <div class="client_logo">
                            <i class="fa-brands fa-youtube"></i>
                        </div>
                        <div class="client_logo">
                            <i class="fa-solid fa-car"></i>
                        </div>
                        <div class="client_logo">
                            <i class="fa-brands fa-stripe"></i>
                        </div>
                        <div class="client_logo">
                            <i class="fa-brands fa-docker"></i>
                        </div>
                        <div class="client_logo">
                            <i class="fa-solid fa-barcode"></i>
                        </div>
                        <div class="client_logo">
                            <i class="fa-brands fa-stack-overflow"></i>
                        </div>
                        <div class="client_logo">
                            <i class="fa-brands fa-dropbox"></i>
                        </div>
                        <div class="client_logo">
                            <i class="fa-brands fa-dribbble"></i>
                        </div>
                        <div class="client_logo">
                            <i class="fa-brands fa-android"></i>
                        </div>
                        <div class="client_logo">
                            <i class="fa-solid fa-business-time"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!-- client.partner.end -->

    <!-- article.blog  -->
     <section id="article_blog" class="common_style">
        <div class="container">
            <div class="row">
                <div class="service_title col-md-12 text-center pb-5">
                    <div class="common_title_style">
                        <h5> - Articles - </h5>
                        <h1>Stay up to date with my blogs? </h1>
                    </div>
                </div>
                <!-- <div class="blog_wrapper"> -->
                    <div class="col-md-6 col-lg-4">
                        <div class="blog_card">
                            <div class="card bg-transparent" style="border:1px solid var(--main-color); border-radius:0;">
                                <div class="card-body">
                                    <div class="blog_img">
                                        <img src="{{ asset('public/frontend') }}/assets/images/article_2.jpg" width="100%" height="100%" alt="">
                                    </div>
                                    <div class="blog_description my-4">
                                        <h2>
                                            What is email marketing? Here you can get 10 tips.
                                        </h2>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="blog_author float-start" style="margin-right: 20px;">
                                        <span class="author_icon">
                                            <i class="fa-regular fa-user"></i>
                                        </span>
                                        <span class="author_name mx-2">admin</span>
                                    </div>
                                    <div class="blog_calender float-end">
                                        <span class="calender_icon">
                                            <i class="fa-regular fa-calendar-days"></i>
                                        </span>
                                        <span class="post_date mx-2">
                                            July 14, 2024
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog_card">
                            <div class="card bg-transparent" style="border:1px solid var(--main-color); border-radius:0;">
                                <div class="card-body">
                                    <div class="blog_img">
                                        <img src="{{ asset('public/frontend') }}/assets/images/article_1.jpg" width="100%" height="100%" alt="">
                                    </div>
                                    <div class="blog_description my-4">
                                        <h2>
                                            What is email marketing? Here you can get 10 tips.
                                        </h2>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="blog_author float-start" style="margin-right: 20px;">
                                        <span class="author_icon">
                                            <i class="fa-regular fa-user"></i>
                                        </span>
                                        <span class="author_name mx-2">admin</span>
                                    </div>
                                    <div class="blog_calender float-end">
                                        <span class="calender_icon">
                                            <i class="fa-regular fa-calendar-days"></i>
                                        </span>
                                        <span class="post_date mx-2">
                                            July 14, 2024
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog_card">
                            <div class="card bg-transparent" style="border:1px solid var(--main-color); border-radius:0;">
                                <div class="card-body">
                                    <div class="blog_img">
                                        <img src="{{ asset('public/frontend') }}/assets/images/article_3.png" width="100%" height="100%" alt="">
                                    </div>
                                    <div class="blog_description my-4">
                                        <h2>
                                            What is email marketing? Here you can get 10 tips.
                                        </h2>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="blog_author float-start" style="margin-right: 20px;">
                                        <span class="author_icon">
                                            <i class="fa-regular fa-user"></i>
                                        </span>
                                        <span class="author_name mx-2">admin</span>
                                    </div>
                                    <div class="blog_calender float-end">
                                        <span class="calender_icon">
                                            <i class="fa-regular fa-calendar-days"></i>
                                        </span>
                                        <span class="post_date mx-2">
                                            July 14, 2024
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- </div> -->
            </div>
        </div>
     </section>
    <!-- article.blog.end -->

    <!-- contact -->
     <section id="contact" class="common_style">
        <div class="container">
            <div class="row">
                <div class="service_title col-md-12 text-center pb-5">
                    <div class="common_title_style">
                        <h5> - Let's Connect - </h5>
                        <h1>If you want to grow your business, get connected with me! </h1>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="email_button m-auto d-flex align-items-center justify-content-center">
                        <a href="mailto:ahmedemon.dev24@gmail.com" class="btn btn-outline-success text-uppercase p-2 px-5 fs-4">say hi</a>
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!-- contact.end -->

@endsection