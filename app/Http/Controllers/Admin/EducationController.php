<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Education;
use App\Models\EduTitle;

class EducationController extends Controller
{
    //___ education.create ___
    public function create()
    {
        $data['edu'] = EduTitle::first();
        return view('admin.resume.education.create',$data);
    }
    //___ education.ex_update ___
    public function ex_update(Request $request,$id)
    {
        $request->validate([
            'edu_title' => 'required|max:255|string',
            'edu_description'=> 'required|min:3|string',
        ]);
        $edu = EduTitle::findOrFail($id);
        $edu->update([
            'edu_title' => $request->edu_title,
            'edu_description' => $request->edu_description,
        ]);
        return response()->json([
            'status' => 200,
            'success' => 'Education content uploaded successfully',
        ]);
    }
}
