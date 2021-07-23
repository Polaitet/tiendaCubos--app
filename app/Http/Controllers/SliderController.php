<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function showMainPage (){
        return view('admin.modify-slider');

    }

    public function addImgToSlider(Request $request) {
        $sliderObject = new Slider();
        $sliderObject->order = $request->get('order');
        $sliderObject->url = $request->get('url');
        $sliderObject->save();

        return redirect(route('showModifySlider'));
    }
}
