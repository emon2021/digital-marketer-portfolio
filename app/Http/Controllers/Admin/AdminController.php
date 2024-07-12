<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePasswordRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Setting;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Models\User;


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

    //___ change.password.view.___
    public function change_pass()
    {
        
        return view('admin.auth.pass_change.change');
    }
    //___ change.password.___
    public function update_pass(UpdatePasswordRequest $request)
    {
       try{
              
         $request->validated();

        $old = Auth::user()->password;  
        $inputPwd = $request->current_password;  
        if(Hash::check($inputPwd, $old)) 
        {

            $id = Auth::id();  
            $user = User::findOrFail($id);  
            $user->password = Hash::make($request->password);   
            $user->update();    
            Auth::logout(); 
            return redirect()->route('admin.login.create');
        }else{
            return redirect()->back()->with('error','Password Mismatched!');    
        }

       }catch(\Exception $e){
           Log::error($e->getMessage());
       }
    }


    //  logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
