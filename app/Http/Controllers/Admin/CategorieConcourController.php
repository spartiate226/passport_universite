<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\concourCategorie;
use Illuminate\Http\Request;
use App\Requests\AdminRequest\CategorieConcourFormRequest;

class CategorieConcourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = concourCategorie::orderByDesc('created_at');
        return view();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategorieConcourFormRequest $request)
    {
        concourCategorie::create($request->all());
        return redirect();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\concourCategorie  $concourCategorie
     * @return \Illuminate\Http\Response
     */
    public function show(concourCategorie $concourCategorie)
    {
        return view();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\concourCategorie  $concourCategorie
     * @return \Illuminate\Http\Response
     */
    public function edit(concourCategorie $concourCategorie)
    {
        return view();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\concourCategorie  $concourCategorie
     * @return \Illuminate\Http\Response
     */
    public function update(CategorieConcourFormRequest $request, concourCategorie $concourCategorie)
    {
        $concourCategorie->update($request->all());
        return redirect();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\concourCategorie  $concourCategorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(concourCategorie $concourCategorie)
    {
        $concourCategorie->delete();
    }
}
