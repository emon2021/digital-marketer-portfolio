<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login_create()
    {
        return view('admin.auth.login');
    }

    //  index
    public function index()
    {
        return view('dashboard');
    }
    //  logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
