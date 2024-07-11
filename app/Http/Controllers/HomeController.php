<?php

namespace App\Http\Controllers;

use App\Models\EduTitle;
use App\Models\Experience;
use Illuminate\Http\Request;
use App\Models\Header;
use App\Models\ServiceTitle;
use App\Models\Service;
use App\Models\Resume;
use App\Models\ExperienceTitle;

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
        $data['services'] = Service::select('id','service_img','service_title','service_description')->where('status',1)->limit(4)->get();
        $data['experiences'] = Experience::select('id','start_time','end_time','designation','company_name')->where('status',1)->get();
        return view('home',$data);
    }
}
