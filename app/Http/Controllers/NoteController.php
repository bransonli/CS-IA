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

    public function upload($subject)
    {
        // shows view to create new resource 
        return view('pages/upload_note', [
            'subject' => Subject::where("name", $subject)->first(),

        ]);

    }

    public function store($subject)
    {
        request()->all();
        // stores the create form 
        $subject_id = Subject::where("name", $subject)->first()->id;
        
        $note = new Note();
        $note->name = request('name');
        $note->description = request('description');

        // Request note file
        $file = request('note');

        // Creating file name
        $file_name = time().$file->getClientOriginalExtension();
        $note->subject_id = $subject_id;
        $note->file_name = $file_name;
        $note->save();

        // Moving file to path // Continue working on this
        $destinationPath = 'uploads';
        $file->move($destinationPath, $file->getClientOriginalName());

        // Redirect
        $subject = Subject::where("id", $subject)->first();
        $url = 1; // Url here
        return redirect($url);
    }


}