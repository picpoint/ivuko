<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopsController extends Controller
{

    public function shops() {
        $title = "Магазины";
        return view('shops', compact('title'));
    }

}
