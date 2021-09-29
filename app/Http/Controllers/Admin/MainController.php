<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    public function index() {
        $user = DB::table('users')->where('is_admin', '=', 1)->get();
        return view('admin.layouts.layout', compact('user'));
    }

}
