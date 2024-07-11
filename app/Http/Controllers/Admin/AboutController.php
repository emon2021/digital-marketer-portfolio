<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutTitle;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    //___ about.title_create ___
    public function title_create()
    {
        $data['about'] = AboutTitle::first();
        return view('admin.resume.about.create',$data);
    }
    //___ about.about_update ___
    public function about_update(Request $request,$id)
    {
        $request->validate([
            'about_title' => 'required|max:255|string',
            'about_description'=> 'required|min:3|string',
        ]);
        $edu = AboutTitle::findOrFail($id);
        $edu->update([
            'about_title' => $request->about_title,
            'about_description' => $request->about_description,
        ]);
        return response()->json([
            'status' => 200,
            'success' => 'About content uploaded successfully',
        ]);
    }
    //____ about.create ____
    public function create()
    {
        $about = About::first();
        return view('admin.resume.about.about',compact('about'));
    }
    //___ about.update ___
    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required|max:100|string',
            'phone' => 'required|max:11|regex:/^([0-9\s\-\+\(\)]*)$/',
            'whatsapp' => 'required|max:11|regex:/^([0-9\s\-\+\(\)]*)$/',
            'nationality' => 'required|max:100|string',
            'email' => 'required|max:255|string',
            'freelance' => 'required|max:100|string',
            'experience' => 'required|max:100|string',
            'lang' => 'required|max:255|string',
        ]);
        $about = About::findOrFail($id);
        $about->update($request->all());
        return response()->json([
            'status' => 200,
            'success' => 'About content uploaded successfully',
        ]);
    }
}
