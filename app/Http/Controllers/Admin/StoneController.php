<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Stone;
use Illuminate\Http\Request;

class StoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stones = Stone::paginate(7);
        return view('admin.stones.index', compact('stones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.stones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stone = Stone::create($request->all());
        session()->flash('success', 'Вставка сохранена');
        return view('admin.stones.create');
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
        $stone = Stone::find($id);
        return view('admin.stones.edit', compact('stone'));
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
        $stone = Stone::find($id);
        $stone->slug = null;
        $stone->update($request->all());
        session()->flash('success', 'Материал отредактирован');
        return redirect()->route('stones.edit', compact('stone'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Stone::destroy($id);
        session()->flash('success', 'Материал удалён');
        return redirect()->route('stones.index');
    }
}
