<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index() {
        $title = 'Ивановская ювелирная компания - купить ювелирные украшения (Екатеринбург, Краснодар)';
        return view('index', compact('title'));
    }

}
