<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{

    public function index() {
        $title = 'Каталог изделий Ивановской ювелирной компании';
        return view('catalog', compact('title'));
    }

}
