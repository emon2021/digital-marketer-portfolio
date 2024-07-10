<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    //___ CREATE HEADER ___
    public function create()
    {
        return view('admin.header.create');
    }
}
