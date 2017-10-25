<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function addSlider(){
        return view('admin.slide.add-slider');
    }
    public function saveSlider(Request $request){

        $sliderImage= $request->file('slider_image');
        $imageName=$sliderImage->getClientOriginalName();
        $directory='slider_image/';
        $imageUrl=$directory.$imageName;
        $sliderImage->move($directory, $imageName);
        $slider= new Slider();
        $slider->slider_image = $imageUrl;
        $slider->publication_status = $request->publication_status;
        $slider->save();
        return redirect('/add-slider')->with('message','Slider image save sccessfully');
    }
    public function manageSlider(){
        $allSliders= Slider::all();
        return view('admin.slide.manage-slider',[
            'allSliders'=>$allSliders
        ]);
    }
    public function unpublishedSliderInfo($id){
        $sliderById = Slider::find($id);
        $sliderById->publication_status = 0;
        $sliderById->save();
        return redirect('/manage-slider');

    }
    public function publishedSliderInfo($id){
        $sliderById = Slider::find($id);
        $sliderById->publication_status = 1;
        $sliderById->save();
        return redirect('/manage-slider');

    }

    public function deleteSliderinfo($id){
        $sliderById = Slider::find($id);
        $sliderById->delete();
        return redirect('/manage-slider');
    }
}
