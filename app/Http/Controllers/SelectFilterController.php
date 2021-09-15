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
            $arrCategories = [];
            $arrMaterials = [];
            $arrStones = [];
            $arrProducts = [];

            foreach ($_POST as $key => $value) {
                if ($key == '_token') {
                    continue;
                }


                if (substr($key, '0', '2') == 'c_') {
                    $arrCategories[] = $value; //substr($key, '2');
                }

                if (substr($key, '0', '2') == 'm_') {
                    $arrMaterials[] = $value; //substr($key, '2');
                }

                if (substr($key, '0', '2') == 's_') {
                    $arrStones[] = $value; //substr($key, '2');
                }
            }

            dump($arrCategories);
            echo "<br>";
            dump($arrMaterials);
            echo "<br>";
            dump($arrStones);


            $categories = DB::table('categories')->where(
                function ($arrCategories) {
                    foreach ($arrCategories as $key => $value) {
                        ['category_id', '=', '$value'];
                    }
                }
            )->get();


            $materials = DB::table('materials')->where(
                function ($arrMaterials) {
                    foreach ($arrMaterials as $key => $value) {
                        ['material', '=', '$value'];
                    }
                }
            )->get();


            $stones = DB::table('stones')->where(
                function ($arrStones) {
                    foreach ($arrStones as $key => $value) {
                        ['stone', '=', '$value'];
                    }
                }
            )->get();


            $products = DB::table('products')->union($categories)->union($materials)->union($stones)->get();


        }

        return view('catalog', compact('title', 'categories', 'materials', 'stones', 'products'));
    }

}
