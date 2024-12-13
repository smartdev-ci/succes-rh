<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Recrutement;
use App\Models\TypeRecrutement;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Auth;

class RecrutementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $type = TypeRecrutement::all();
        return view('recrutement.index', compact('type'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $type = TypeRecrutement::all();
        return view('recrutement.index', compact('type'));
    }

    public function getListByUser(): View
    {
        $user_id = Auth::user()->id;
        $liste = DB::table('recrutements')->where('user_id', $user_id)->get();
        return view('recrutement.list', compact('liste'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $recrutement = Recrutement::create([
            "titre" => $request->titre,
            "lieu" => $request->lieu,
            "descriptif_entreprise" => $request->descriptif_entreprise,
            "descriptif_poste" => $request->descriptif_poste,
            "profil" => $request->profil,
            "competences" => $request->competences,
            "formation" => $request->formation,
            "experiences" => $request->experiences,
            "type_recrutement" => $request->type_recrutement,
            "status" => $request->status,
            "user_id"=>Auth::id(),
        ]);
        // dd($recrutement);
        return redirect()->route('recrutement.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Recrutement $recrutement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recrutement $recrutement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recrutement $recrutement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recrutement $recrutement)
    {
        //
    }
}
