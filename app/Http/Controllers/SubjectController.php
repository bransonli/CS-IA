<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function show_discussion_subjects()
    {
        $subjects = Subject::all();

        return view('pages.discussion_subjects', [
            'subjects' => $subjects
        ]);
    }

    public function show_notes_subjects()
    {
        $subjects = Subject::all();

        return view('pages.notes_subjects', [
            'subjects' => $subjects
        ]);
    }
}
