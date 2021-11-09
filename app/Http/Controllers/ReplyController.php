<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reply;
use App\Models\Topic;

class ReplyController extends Controller
{
    public function show($topicName)
    {
        $topic = Topic::where("name", $topicName)->first();
        $topic_id = $topic->id;


        return view('pages.replies', [
            'replies' => Reply::where("topic_id", $topic_id)->get(),
            'topic' => $topic,
        ]);
    }
}