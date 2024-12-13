<?php

namespace App\Http\Controllers;

use App\Models\NoteService;
use Illuminate\Http\Request;

class NoteServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('services.note');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(NoteService $noteService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NoteService $noteService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NoteService $noteService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NoteService $noteService)
    {
        //
    }
}
