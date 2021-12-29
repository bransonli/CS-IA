<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Note;
use App\Models\Subject;

class NoteController extends Controller
{
    public function show($subject)
    {
        
        $subject = Subject::where("name", $subject)->first();

        return view('pages.notes', [
            'notes' => Note::where("subject_id", $subject->id)->get(),
            'subject' => $subject,
        ]);
    }

    public function create($subject)
    {
        // shows view to create new resource 
        return view('pages/create_notes', [
            'subject' => Subject::where("name", $subject)->first(),

        ]);

    }


}