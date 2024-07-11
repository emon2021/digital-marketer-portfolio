<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceTitle;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //___ CREATE ___
    public function create()
    {
        $service_title = ServiceTitle::first();
        return view('admin.services.create',compact('service_title'));
    }

    //___ UPDATE ___
    public function update(Request $request, $id)
    {
        $request->validate([
            'top_title' => 'required|min:3|max:255|string',
            'mid_title' => 'required|min:3|max:255|string',
            'bottom_title' => 'required|min:3|max:255|string',
        ]);
        $service = ServiceTitle::find($id);
        $service->top_title = $request->top_title;
        $service->mid_title = $request->mid_title;
        $service->bottom_title = $request->bottom_title;
        $service->update();

        return response()->json([
            'status' => 200,
            'success' => 'Service content successfully uploaded',
        ]);
        
    }
}
