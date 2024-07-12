@extends('layouts.app')
@section('content')
<!-- article.blog  -->
<section id="article_blog" class="common_style">
    <div class="container">
        <div class="row">
            <div class="service_title col-md-12 text-center pb-5">
                <div class="common_title_style">
                    <h5> - {{ $blog_title->title }} - </h5>
                    <h1>{{ $blog_title->subtitle }}</h1>
                    <h1>{{ $blog_title->subtitle_2 }}</h1>
                </div>
            </div>
            <!-- <div class="blog_wrapper"> -->
                @foreach($blogs as $blog)
                <div class="col-md-6 col-lg-4">
                    <div class="blog_card">
                        <div class="card bg-transparent" style="border:1px solid var(--main-color); border-radius:0;">
                            <div class="card-body">
                                <div class="blog_img">
                                    <img src="{{ asset( $blog->blog_img) }}" width="100%" height="100%" alt="">
                                </div>
                                <div class="blog_description my-4">
                                    <h2>
                                        <a href="#" style="color:var(--main-text-color)">{{ $blog->blog_title }}</a>
                                    </h2>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="blog_author float-start" style="margin-right: 20px;">
                                    <span class="author_icon">
                                        <i class="fa-regular fa-user"></i>
                                    </span>
                                    <span class="author_name mx-2">
                                        {{ $blog->user->name }}
                                    </span>
                                </div>
                                <div class="blog_calender float-end">
                                    <span class="calender_icon">
                                        <i class="fa-regular fa-calendar-days"></i>
                                    </span>
                                    <span class="post_date mx-2">
                                        @php
                                            $date = date_create($blog->created_at);
                                            echo $date = date_format($date, "F d , Y");
                                        @endphp
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            <!-- </div> -->
        </div>
    </div>
 </section>
<!-- article.blog.end -->
@endsection