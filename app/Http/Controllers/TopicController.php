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
}