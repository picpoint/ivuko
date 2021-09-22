<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductSingle extends Controller
{

    public function single($id) {
        $title = 'Каталог изделий Ивановской ювелирной компании';
        $product = Product::find($id);
        return view('productsingle', compact('product', 'title'));
    }

}
