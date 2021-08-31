<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Material;
use App\Product;
use App\Stone;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $materials = Material::all();
        $stones = Stone::all();
        return view('admin.products.create', compact('categories', 'materials', 'stones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileName = $request->file('picture')->getClientOriginalName();

        $categ = $request->category_id;
//        dd($categ);

        $catFolder = '';

        if ($categ == 1) {
            $catFolder = 'zhenskie-kolca';
        } elseif ($categ == 2) {
            $catFolder = 'zaponki';
        } elseif ($categ == 3) {
            $catFolder = 'muzhskie-kolca';
        } elseif ($categ == 4) {
            $catFolder = 'pirsing';
        } elseif ($categ == 5) {
            $catFolder = 'podveski';
        } elseif ($categ == 6) {
            $catFolder = 'pussety';
        } elseif ($categ == 7) {
            $catFolder = 'sergi';
        }



        $img = $request->file('picture')->storeAs("images/{$catFolder}", $fileName);

        Product::create([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'vendor_code' => $request->vendor_code,
            'material' => $request->material,
            'stone' => $request->stone,
            'weight' => $request->weight,
            'size' => $request->size,
            'price' => $request->price,
            'picture' => $img,
        ]);
        session()->flash('success', 'Товар успешно сохранён');
        return redirect()->route('products.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
