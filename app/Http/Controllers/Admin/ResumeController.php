<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resume;

class ResumeController extends Controller
{
    //___ RESUME CREATE ___
    public function create()
    {
        $resume = Resume::first();
        return view('admin.resume.create', compact('resume'));
    }

    //___ RESUME UPDATE ___
    public function update(Request $request,$id)
    {
        $request->validate([
            'top_title' => 'required|min:3|max:255|string',
            'mid_title' => 'required|min:3|max:255|string',
            'bottom_title' => 'nullable|min:3|max:255|string',
        ]);
        $resume = Resume::findOrFail($id);
        $resume->update([
            'top_title' => $request->top_title,
            'mid_title' => $request->mid_title,
            'bottom_title' => $request->bottom_title,
        ]);
        
        return response()->json([
            'status' => 200,
            'success'=> 'Resume content successfully updated',
        ]);
    }
}
