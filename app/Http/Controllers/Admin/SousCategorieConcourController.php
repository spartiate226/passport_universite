<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\concourSousCategorie;
use Illuminate\Http\Request;
use App\Requests\AdminRequest\SousCategorieConcourFormRequest;

class SousCategorieConcourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $souscategories = concourSousCategorie::orderByDesc('created_at');
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
    public function store(SousCategorieConcourFormRequest $request)
    {
        concourSousCategorie::create($request->all());
        return redirect();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\concourSousCategorie  $concourSousCategorie
     * @return \Illuminate\Http\Response
     */
    public function show(concourSousCategorie $concourSousCategorie)
    {
        return view();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\concourSousCategorie  $concourSousCategorie
     * @return \Illuminate\Http\Response
     */
    public function edit(concourSousCategorie $concourSousCategorie)
    {
        return view();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\concourSousCategorie  $concourSousCategorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, concourSousCategorie $concourSousCategorie)
    {
        $concourSousCategorie->update($request->all());
        return redirecte();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\concourSousCategorie  $concourSousCategorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(concourSousCategorie $concourSousCategorie)
    {
        $concourSousCategorie->delete();
    }
}
