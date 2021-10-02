<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductDescription;
use App\Models\ProductMainOrder;
use App\Models\ProductsFoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
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

    public function showMainPage(){
        $productsData = Product::all();

        return view('admin.product-management.product-management')->with('productsData',$productsData);
    }

    public function addProduct(Request $request) {
        $product = new Product();

        $product->EAN = $request->get('ean');
        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->stock = $request->get('stock');
        $product->sticker = isset($request->stickers) ? 1 : 0;
        $product->magnet = isset($request->magnets) ? 1 : 0;
        $product->dimensions = $request->get('dimensions');
        $product->brand = $request->get('brand');
        $product->weight = $request->get('weight');
        $product->save();

        $productDesc = new ProductDescription();
        $productDesc->description = $request->get('description');
        $productDesc->productId = Product::max('id');
        $productDesc->save();

        return redirect(route('showProductManagement'));

    }
    public function showMainPhotoPage($id){
        $productPhotos = ProductsFoto::where('productId', '=', $id)->orderBy('order')->get();
        return view('admin.product-management.photo-management')->with('productPhotos', $productPhotos)->with('productId', $id);
    }

    public function uploadNewPhoto(Request $request) {
        $fileName= time().'.'.$request->photo->extension();
        $request->photo->move(public_path('uploads'), $fileName);

        $currentPhotos = ProductsFoto::where('productId', '=',  $request->productId)->first();

        $photo = new ProductsFoto();
        $photo->order = $request->order;
        $photo->productId = $request->productId;
        $photo->url = '/uploads/'.$fileName;
        if ($currentPhotos === null) {
            $photo->mainPhoto = 1;
        }
        $photo->save();

        return redirect(route('productPhotoManagement', ['id'=> $request->productId]));
    }

    public function deleteProductPhoto($id) {
        $photo = ProductsFoto::where('id', '=', $id)->first();
        $photo->delete();

        return back();
    }

    public function  addProductToHomePage($id) {
        $homePageOrderModel = new ProductMainOrder();
        $homePageOrderModel->order = 1;
        $homePageOrderModel->productId = $id;
        $homePageOrderModel->save();

        return back();
    }

    public function removeProductToHomePage($id) {
        $homePageOrderModel = ProductMainOrder::where('productId', '=', $id)->first();
        $homePageOrderModel->delete();

        return back();
    }

    public function editOrderProductsHomePage(Request $request) {
        $homePageOrderModel = ProductMainOrder::where('productId', '=', $request->productId)->first();
        $homePageOrderModel->order = $request->order;
        $homePageOrderModel->save();

        return back();
    }

    public function makeMainPhoto($id) {
        $futureMain = ProductsFoto::where('id', '=', $id)->first();
        $currentMain = ProductsFoto::where('productId', '=', $futureMain->productId)->where('mainPhoto', '=', 1)->where('id', '!=', $id)->first();
        if ($currentMain != null) {
            $currentMain->mainPhoto = 0;
            $currentMain->save();
        }
        $futureMain->mainPhoto = 1;
        $futureMain->save();
        return back();

    }


    public function productEdit($id) {
        $product = Product::where('id', '=', $id)->first();
        $productsOnMainPageData = ProductMainOrder::all();
        $orderOfProduct = ProductMainOrder::where('productId', '=', $id)->first();
        $idOfProductOnMagePage = array();

        foreach ($productsOnMainPageData as $productOnMainPageData) {
            array_push($idOfProductOnMagePage, $productOnMainPageData->productId);
        }

        if ($orderOfProduct === null) {
            return view('admin.product-management.edit-product-management')->with('products', $product)->with('productsOnMainPage', $idOfProductOnMagePage);
        } else {
            $productImages = DB::table('product_main_order')
                ->join('products_fotos', 'product_main_order.productId', '=', 'products_fotos.productId')
                ->where('products_fotos.mainPhoto', '=', 1)
                ->orderBy('product_main_order.order', 'asc')
                ->get();


            return view('admin.product-management.edit-product-management')->with('products', $product)->with('productsOnMainPage', $idOfProductOnMagePage)
                ->with('productOrder', $orderOfProduct->order)->with('productImages', $productImages);
        }

    }
    public function editProducts(Request $request) {
        $product = Product::where('id', '=', $request->id)->first();
        $product->EAN = $request->get('ean');
        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->stock = $request->get('stock');
        $product->sticker = isset($request->stickers) ? 1 : 0;
        $product->magnet = isset($request->magnets) ? 1 : 0;
        $product->dimensions = $request->get('dimensions');
        $product->brand = $request->get('brand');
        $product->weight = $request->get('weight');
        $product->save();

        $productDesc = ProductDescription::where('productId', '=', $request->id)->first();
        $productDesc->description = $request->get('description');
        $productDesc->save();


        return redirect(route('showProductManagement'));
    }
}
