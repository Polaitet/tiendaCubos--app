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

    public function showMainPage ()
    {
        $sliderData = Slider::where('active', '=', 1)->orderBy('order')->get();
        return view('admin.modify-slider')->with('sliderData', $sliderData);
    }

    public function addImgToSlider(Request $request) {
        $sliderObject = new Slider();
        $sliderObject->order = $request->get('order');
        $sliderObject->url = $request->get('url');
        $sliderObject->save();

        return redirect(route('showModifySlider'));
    }

    public function modifyPositionAdd($id) {
        $sliderObject = Slider::where('id', '=', $id)->first();
        $sliderObject->order = $sliderObject->order + 1;
        $sliderObject->save();
        return redirect(route('showModifySlider'));
    }

    public function modifyPositionSub($id) {
        $sliderObject = Slider::where('id', '=', $id)->first();
        $sliderObject->order = $sliderObject->order - 1;
        $sliderObject->save();

        return redirect(route('showModifySlider'));
    }

    public function removeSlider($id) {
        $sliderObject = Slider::where('id', '=', $id)->first();
        $sliderObject->delete();

        return redirect(route('showModifySlider'));

    }
}
