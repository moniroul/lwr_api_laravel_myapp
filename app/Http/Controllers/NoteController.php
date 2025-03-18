<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $notes = Note::all();
        return response()->json([
            'notes' => $notes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->title);
        // Log::info(['title' => $request->title, 'content' => $request->content]);

        $note =  Note::create(
            [
                'title' => $request->title,
                'content' => $request->content
            ]
        );

        return response()->json([
            'note' => $note
        ]);
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
