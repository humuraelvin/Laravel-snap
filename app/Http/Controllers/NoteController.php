<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Retrieve all notes from the database
        $notes = Note::all();
         return view('notes.index', compact('notes'));
         
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(view: 'notes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request -> validate([
            'title' => 'required|string|min:5|max:255|unique:notes',
            'body' => 'required|string|min:10',
        ]);
        
        $request->user()->notes()->create($validated);
        dd('created');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        //
    }
}