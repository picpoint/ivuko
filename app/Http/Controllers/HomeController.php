<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index() {
        $title = 'Ивановская ювелирная компания - купить ювелирные украшения (Екатеринбург, Краснодар)';
        $products = DB::table('products')->orderBy('created_at', 'desc')->limit(10)->get();
        return view('index', compact('title', 'products'));
    }

}
