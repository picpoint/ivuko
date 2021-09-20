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

            $categories = Category::all();
            $materials = Material::all();
            $stones = Stone::all();

            $arrCategories = [];
            $arrMaterials = [];
            $arrStones = [];

            foreach ($_POST as $key => $value) {
                if ($key == "_token") {
                    continue;
                }

                if (substr($key, 0, 2) == 'c_') {
                    $arrCategories[] = $value;
                }

                if (substr($key, 0, 2) == 'm_') {
                    $arrMaterials[] = $value;
                }

                if (substr($key, 0, 2) == 's_') {
                    $arrStones[] = $value;
                }

            }

//            dump($arrCategories);
//            dump($arrMaterials);
//            dd($arrStones);



//            $products = DB::table('products')
//                ->whereIn('category_id', $arrCategories)
//                ->where(function($query) {
//                    $query->where('material', 2);
//                })
//                ->get();


//            $products = DB::table('products')
//                ->whereIn('category_id', $arrCategories)
//                ->whereIn('material', $arrMaterials)
//                ->whereIn('stone', $arrStones)
//                ->get();


            $products = DB::table('products')
                ->orWhereIn('category_id', $arrCategories)
                ->whereIn('material', $arrMaterials)
                ->get();



            return view('catalog', compact('title', 'categories', 'materials', 'stones', 'products'));


        }

    }

}
