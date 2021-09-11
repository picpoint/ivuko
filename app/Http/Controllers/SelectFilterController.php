<?php

namespace App\Http\Controllers;

use App\Category;
use App\Material;
use App\Product;
use App\Stone;

use Illuminate\Http\Request;

class SelectFilterController extends Controller
{

    public function selectFilter() {
        $title = 'Каталог';

        if (empty($_POST)) {
            $categories = Category::all();
            $materials = Material::all();
            $stones = Stone::all();
            $products = Product::all();
        } else {
            dd($_POST);
//            $categories = Category::find('slug');
        }

        return view('catalog', compact('title', 'categories', 'materials', 'stones', 'products'));
    }

}
