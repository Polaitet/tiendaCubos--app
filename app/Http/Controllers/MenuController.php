<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menuitem;

class MenuController extends Controller
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

    public function showModifyMenu() {
        $menuData = Menuitem::where('active', '=', 1)->orderBy('order')->get();
        return view('admin.modify-menu')->with('menuData', $menuData);


    }

    public function addMenuItem(Request $request) {
        $menuItemTable = new Menuitem();
        $menuItemTable->order = $request->get('order');
        $menuItemTable->url = $request->get('url');
        $menuItemTable->name = $request->get('name');
        $menuItemTable->save();

        return redirect(route('showModifyMenu'));
    }
    public function modifyMenuPositionAdd($id) {
        $menuObject = Menuitem::where('id', '=', $id)->first();
        $menuObject->order = $menuObject->order + 1;
        $menuObject->save();
        return redirect(route('showModifyMenu'));
    }

    public function modifyMenuPositionSub($id) {
        $menuObject = Menuitem::where('id', '=', $id)->first();
        $menuObject->order = $menuObject->order - 1;
        $menuObject->save();

        return redirect(route('showModifyMenu'));
    }

    public function removeMenuItem($id) {
        $menuObject = Menuitem::where('id', '=', $id)->first();
        $menuObject->delete();

        return redirect(route('showModifyMenu'));

    }
}
