<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class MainController extends Controller
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

    public function showMainPage() {
        $sliderData = Slider::where('active', '=', 1)->orderBy('order')->get();
        return view('main_page')->with('sliderData', $sliderData);
    }
}
