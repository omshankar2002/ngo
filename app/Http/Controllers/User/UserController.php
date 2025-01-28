<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function profile()
    {
        return view('user.profile');
    }

    public function profile_submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $admin_data = Admin::find(Auth::guard('admin')->user()->id);

        if ($request->photo != null) {
            $request->validate([
                'photo' => 'image|mimes:jpg.jpeg,png',
            ]);

            if(Auth::guard('admin')->user()->photo != null){
            unlink(public_path('uploads/'.Auth::guard('admin')->user()->photo));
            }

            $final_name = time(). '.' .$request->photo->extension();
            $request->photo->move(public_path('uploads'), $final_name);
            $admin_data->photo = $final_name;
        } 

        if ($request->password != '' || $request->password_confirmation != '') {
            $request->validate([
                'password' => 'required',
                'password_confirmation' => 'required|same:password',

            ]);
            $admin_data->password = Hash::make($request->password);
        }



        $admin_data->name = $request->name;
        $admin_data->email = $request->email;
        $admin_data->update();

        return redirect()->back()->with('success', 'Profile update successfully');
    }
}
