<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Auth;
use App\Models\Admin;


class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function edit_profile()
    {
        return view('admin.edit_profile');
    }

    public function edit_profile_submit(Request $request)
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

    public function login()
    {
        return view('admin.login');
    }

    public function login_submit(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $check = $request->all();
        $data = [
            'email' => $check['email'],
            'password' => $check['password'],
        ];
        if (Auth::guard('admin')->attempt($data)) {
            return redirect()->route('admin_dashboard')->with('success', 'Login Successfull');
        } else {
            return redirect()->route('admin_login')->with('error', 'Invalid Credentials');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin_login')->with('success', 'Logout Successfull');
    }

    public function forget_password()
    {
        return view('admin.forget-password');
    }

    public function forget_password_submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $admin_data = Admin::where('email', $request->email)->first();
        if (!$admin_data) {
            return redirect()->route('admin_forget_password')->with('error', 'Email not found');
        }

        $token = hash('sha256', time());
        $admin_data->token = $token;
        $admin_data->update();

        $reset_link = url('admin/reset-password/' . $token . '/' . $request->email);

        $subject = "Reset Password";
        $message = "Please click on below link to reset your password<br><br>";
        $message .= "<a href='" . $reset_link . "'>Click here</a>";

        \Mail::to($request->email)->send(new Websitemail($subject, $message));

        return redirect()->back()->with('success', 'Reset password link sent on your email');
    }

    public function reset_password($token, $email)
    {
        $admin_data = Admin::where('email', $email)->where('token', $token)->first();
        if (!$admin_data) {
            return redirect()->route('admin.login')->with('error', 'Invalid token or email');
        }
        return view('admin.reset-password', compact('token', 'email'));
    }

    public function reset_password_submit(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]);

        $admin_data = Admin::where('email', $request->email)->where('token', $request->token)->first();
        $admin_data = Hash::make($request->password);
        $admin_data->token = "";
        $admin_data->update();

        return redirect()->route('admin_login')->with('success', 'Password reset successfully');
    }
}
