<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class AdminSliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.slider.index', compact('sliders'));

    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function create_submit(Request $request)
    {
        $request->validate([
            'heading' => 'required',
            'text' => 'required',
            'photo' => 'required|image|mimes:jpg,jpeg,png',
        ]);
        $slider = new Slider(); 
        $slider->heading = $request->heading;
        $slider->text = $request->text;
        $slider->button_text = $request->button_text;
        $slider->button_link = $request->button_link;
        $final_name = time(). '.' .$request->photo->extension();
        $request->photo->move(public_path('uploads'), $final_name);
        $slider->photo = $final_name;
        $slider->save();

        return redirect()->back()->with('success', 'slider created successfully');
    }
}
