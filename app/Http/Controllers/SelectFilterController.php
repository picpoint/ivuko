<?php

namespace App\Http\Controllers;

use App\Category;
use App\Material;
use App\Product;
use App\Stone;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SelectFilterController extends Controller
{

    public function selectFilter() {
        $title = 'Каталог';

        if (empty($_POST)) {
            $categories = Category::all();
            $materials = Material::all();
            $stones = Stone::all();
            $products = Product::all();

            return view('catalog', compact('title', 'categories', 'materials', 'stones', 'products'));
        } else {
//            dd($_POST);

            $categories = Category::all();
            $materials = Material::all();
            $stones = Stone::all();

            $res = [];

            foreach ($_POST as $key => $value) {
                if ($key == "_token") {
                    continue;
                }
                $res[] = $value;
            }


            $products = DB::table('products')->whereIn('category_id', $res)->get();

            return view('catalog', compact('title', 'categories', 'materials', 'stones', 'products'));


        }

    }

}
