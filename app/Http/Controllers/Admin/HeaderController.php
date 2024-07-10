<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HeaderRequest;
use App\Models\Header;
use Illuminate\Support\Facades\Storage;

class HeaderController extends Controller
{
    //___ CREATE HEADER ___
    public function create()
    {
        return view('admin.header.create');
    }
    
    //___ STORE HEADER ___
    public function store(HeaderRequest $request)
    {
        $request->validated();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file_path = $file->move('public/frontend/assets/images/uploads',$filename);
        }
        if($request->hasFile('resume'))
        {
            $resume = $request->file('resume');
            $resume_name = time().'.'.$resume->getClientOriginalExtension();
            $up_path = $resume->move('public/frontend/assets/images/uploads/pdf',$resume_name);
        }
        Header::create([
            'designation' => $request->designation,
            'greetings' => $request->greetings,
            'description' => $request->description,
            'name' => $request->name,
            'image' => $file_path,
            'resume' => $up_path,

        ]);

        return response()->json([
            'status' => 200,
            'success' => 'Header content successfully uploaded',
        ]);
    }
}
