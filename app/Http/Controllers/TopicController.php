<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Topic;

class TopicController extends Controller
{
    public function show($subject)
    {
        return view('pages.topics', [
            'topics' => Topic::where("subject", $subject)->get()
        ]);
    }

    public function create()
    {
        // shows view to create new resource 
        return view('pages/create_topic');

    }

    public function store()
    {
        request()->all();
        // stores the create form 
        
        $topic = new Topic();
        $topic->name = request('name');
        $topic->subject = request('subject');
        $topic->save();

        return redirect('/');
    }



}