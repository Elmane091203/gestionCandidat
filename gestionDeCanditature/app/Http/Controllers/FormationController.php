<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use App\Models\Formation;
use App\Models\Referentiel;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class FormationController extends Controller
{
    public int $contenue = 0;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('formations/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function acceuil()
    {
        $candidats = Candidat::all();
        $formations = Formation::all();
        $referentiels = Referentiel::all();
        return view("layouts.app", ['contenu' => $this->contenue,'candidats'=>$candidats,'formations'=>$formations,'referentiels'=>$referentiels]);
    }
}
