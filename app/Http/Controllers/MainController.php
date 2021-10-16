<?php

namespace App\Http\Controllers;

use App\Models\Menuitem;
use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\DB;

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
        $menuData =  Menuitem::where('active', '=', 1)->orderBy('order')->get();
        $productData = DB::table('product_main_order')
            ->join('products', 'product_main_order.productId', '=', 'products.id')
            ->join('product-description', 'product-description.productId', '=', 'products.id')
            ->join('product-categories', 'product-categories.productId', '=', 'products.id')
            ->join('categories', 'categories.id', '=', 'product-categories.categoriesId')
            ->join('products_fotos', 'products_fotos.productId', '=', 'products.id')
            ->leftJoin('product-reviews', 'product-reviews.productId', '=', 'products.id')
            ->select('product_main_order.order AS productOrder', 'product-description.description AS productDescription', 'product-categories.categoriesId AS categoryId',
            'categories.name AS categoryName', 'products.name AS productName', 'products_fotos.url AS productUrl', 'product-reviews.stars AS productStars')
            ->get();

        return view('main_page')->with('sliderData', $sliderData)->with('menuData', $menuData)->with('productsData', $productData);

    }
}
