<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\concourNiveau;
use Illuminate\Http\Request;
use App\Requests\AdminRequest\NiveauConcourFormRequest;

class NivauConcourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $niveaux = concourNiveau::orderByDesc('created_at');
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
    public function store(NiveauConcourFormRequest $request)
    {
        concourNiveau::create($request->all());
        return redirect();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\concourNiveau  $concourNiveau
     * @return \Illuminate\Http\Response
     */
    public function show(concourNiveau $concourNiveau)
    {
        return view();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\concourNiveau  $concourNiveau
     * @return \Illuminate\Http\Response
     */
    public function edit(concourNiveau $concourNiveau)
    {
        return view();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\concourNiveau  $concourNiveau
     * @return \Illuminate\Http\Response
     */
    public function update(NiveauConcourFormRequest $request, concourNiveau $concourNiveau)
    {
        $concourNiveau->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\concourNiveau  $concourNiveau
     * @return \Illuminate\Http\Response
     */
    public function destroy(concourNiveau $concourNiveau)
    {
        $concourNiveau->delete();
    }
}
