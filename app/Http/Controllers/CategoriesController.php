<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
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

    public function showCategoriesManagement(){
        $categories = Category::orderBy('name')->get();

        return view('admin.categories-management')->with('categoryData', $categories);
    }
    public function addNewCategory (Request $request){
        $category = new Category();
        $category->name = $request->get('name');
        $category->save();

        return redirect(route('showCategoriesManagement'));

    }

    public function removeCategory($id) {
        $categories = Category::where('id', '=', $id)->first();
        $categories->delete();

        return redirect(route('showCategoriesManagement'));

    }
}
