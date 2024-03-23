<?php

namespace Firdavs\Api\Controllers;

use Admin\Models\Allergens_model;
use Admin\Models\Menus_model;
use System\Classes\Controller;
use Illuminate\Http\Request;
class MenuController extends Controller
{
    public function getMenusItems(Request $request)
    {
        $menus = Menus_model::with('categories')->paginate(100);

        return response()->json(['data' => $menus, 'pagination' => (string) $menus->links()]);
    }

    public function updateMenusPrices(Request $request)
    {
        if (!$request->get('items') || !$request->get('procent')){
            return redirect()->back();
        }
        $menus = Menus_model::whereIn('menu_id', $request->get('items'))->get();
        $procent = $request->get('procent');

        if ($procent === 0){
            return redirect()->back();
        }

        foreach ($menus as $menu) {
            // Calculate the new price based on the percentage increase
            $newPrice = $menu->menu_price + ($menu->menu_price * ($procent / 100));

            // Update the menu's price in the database
            $menu->update(['menu_price' => $newPrice]);
        }
        return redirect()->back();
    }


    public function getAllergens(Request $request)
    {
        $search_query = $request->get('search');

        $allergens = Allergens_model::where('name', 'LIKE', "%$search_query%")->get();

        return response()->json(['data' => $allergens]);
    }
}
