<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Setting;

class AdminController extends Controller
{
    public function login_create()
    {
        return view('admin.auth.login');
    }

    //  index
    public function index()
    {
        $data['setting'] = Setting::first();
        return view('dashboard',$data);
    }
    //  logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
