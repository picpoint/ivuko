<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Category;
use App\Material;
use App\Stone;

class CatalogController extends Controller
{

    public function index() {
        $title = 'Каталог изделий Ивановской ювелирной компании';
        return view('catalog', compact('title'));
    }


    public function showProductsByCategory($id) {
        $title = 'Каталог изделий Ивановской ювелирной компании';
        $pagination = 'no';

        $categories = Category::all();
        $materials = Material::all();
        $stones = Stone::all();

        $products = DB::table('products')->where('category_id', '=', $id)->paginate(18);

        return view('catalog', compact('title', 'categories', 'materials', 'stones', 'products', 'pagination'));
    }


}
