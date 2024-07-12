<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Log;

class SettingsController extends Controller
{
    //___ settings.create ___
    public function create()
    {
        $settings = Setting::first();
        return view('admin.settings.create',compact('settings'));
    }
    //____ settings.update ____
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'front_logo' => 'nullable|mimes:jpeg,jpg,png|max:2048',
                'back_logo' => 'nullable|mimes:jpeg,jpg,png|max:2048',
                'favicon' => 'nullable|mimes:jpeg,jpg,png|max:2048',
                'facebook' => 'nullable|url',
                'twitter' => 'nullable|url',
                'instagram' => 'nullable|url',
                'linkedin' => 'nullable|url',
                'github' => 'nullable|url',
                'youtube' => 'nullable|url',
            ]);
            $settings = Setting::findOrFail($id);
            $path = "public/frontend/assets/images/uploads/settings/";
            if ($request->hasFile('front_logo')) {
                if(file_exists($settings->front_logo))
                {
                    unlink($settings->front_logo);
                }
                $front_logo = $request->file('front_logo');
                $front_logo_name = time().uniqid(). '.' . $front_logo->getClientOriginalExtension();
                $front_logo->move($path, $front_logo_name);
                $front_path = $path . $front_logo_name;
                $settings->front_logo = $front_path;
            }
            if($request->hasFile('back_logo')) {
                if(file_exists($settings->back_logo)) {
                    unlink($settings->back_logo);
                }
                $back_logo = $request->file('back_logo');
                $back_logo_name = time().uniqid(). '.' . $back_logo->getClientOriginalExtension();
                $back_logo->move($path, $back_logo_name);
                $back_path = $path.$back_logo_name;
                $settings->back_logo = $back_path;
            }
            if($request->hasFile('favicon')) {
                if(file_exists($settings->favicon)) {
                    unlink($settings->favicon);
                }
                $favicon = $request->file('favicon');
                $favicon_name = time().uniqid(). '.' . $favicon->getClientOriginalExtension();
                $favicon->move($path, $favicon_name);
                $fav_path = $path . $favicon_name;
                $settings->favicon = $fav_path;
            }
            
           
           $settings->facebook = $request->facebook;
           $settings->twitter = $request->twitter;
           $settings->instagram = $request->instagram;
           $settings->linkedin = $request->linkedin;
           $settings->github = $request->github;
           $settings->youtube = $request->youtube;
           $settings->update();
            
            return response()->json([
                'status' => 200,
                'success' => 'Settings uploaded successful.',
            ]);
        } catch (\Exception $th) {
            Log::error($th->getMessage());
        }
    }
}
