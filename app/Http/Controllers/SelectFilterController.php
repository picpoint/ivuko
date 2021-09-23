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
            $pagination = 'yes';

            $categories = Category::all();
            $materials = Material::all();
            $stones = Stone::all();
            $products = Product::paginate(18);

            return view('catalog', compact('title', 'categories', 'materials', 'stones', 'products', 'pagination'));
        } else {

            $pagination = 'no';

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


            if (count($arrCategories) == 0) {
                for ($i = 1; $i <= 10; $i++) {
                    $arrCategories[] = "$i";
                }
            }


            if (count($arrMaterials) == 0) {
                for ($i = 1; $i <= 3; $i++) {
                    $arrMaterials[] = "$i";
                }
            }


            if (count($arrStones) == 0) {
                for ($i = 1; $i <= 20; $i++) {
                    $arrStones[] = "$i";
                }
            }



            $products = DB::table('products')
                ->whereIn('category_id', $arrCategories)
                ->whereIn('material_id', $arrMaterials)
                ->whereIn('stone_id', $arrStones)
                ->get();



            return view('catalog', compact('title', 'categories', 'materials', 'stones', 'products', 'pagination'));

        }

    }

}
