<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;
use App\Models\ServiceTitle;
use App\Models\Service;

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
        $data['services'] = Service::select('id','service_img','service_title','service_description')->where('status',1)->limit(4)->get();
        return view('home',$data);
    }
}
