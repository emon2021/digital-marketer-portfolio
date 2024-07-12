<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\EduTitle;
use App\Models\Experience;
use Illuminate\Http\Request;
use App\Models\Header;
use App\Models\ServiceTitle;
use App\Models\Service;
use App\Models\Resume;
use App\Models\ExperienceTitle;
use App\Models\AboutTitle;
use App\Models\About;
use App\Models\Testimonial;
use App\Models\TestimonialTitle;
use App\Models\Blog;
use App\Models\BlogTitle;

class HomeController extends Controller
{
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['header'] = Header::first();
        $data['service_title'] = ServiceTitle::first();
        $data['resume_title'] = Resume::first();
        $data['ex_title'] = ExperienceTitle::first();
        $data['edu_title'] = EduTitle::first();
        $data['about_title'] = AboutTitle::first();
        $data['about']  =   About::first();
        $data['testi_title'] = TestimonialTitle::first();
        $data['blog_title'] = BlogTitle::first();
        $data['blogs'] = Blog::select('id','user_id','blog_img','blog_title','blog_description')->where('blog_status',1)->limit(3)->get();
        $data['testimonials'] = Testimonial::select('id','name','designation','description')->where('status',1)->get();
        $data['services'] = Service::select('id','service_img','service_title','service_description')->where('status',1)->limit(4)->get();
        $data['experiences'] = Experience::select('id','start_time','end_time','designation','company_name')->where('status',1)->get();
        $data['educations'] = Education::select('id','start_date','end_date','exam_name','institute')->where('status',1)->get();
        return view('home',$data);
    }
}
