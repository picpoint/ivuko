<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Material;
use App\Stone;

use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function search(Request $request) {
        $title = "Поиск товаров";

        $pagination = 'yes';

        $categories = Category::all();
        $materials = Material::all();
        $stones = Stone::all();

        $find = $request->search;
        $products = Product::where('vendor_code', 'LIKE', "%{$find}%")->paginate(20);
        return view('catalog', compact('products', 'find', 'title', 'categories', 'materials', 'stones', 'pagination'));
    }

}
