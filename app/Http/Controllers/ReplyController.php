<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reply;
use App\Models\Topic;
use App\Models\Subject;

class ReplyController extends Controller
{
    public function show($topic_name)
    {
        $topic = Topic::where("name", $topic_name)->first();
        $topic_id = $topic->id;
        $subject = Subject::where("id", $topic->subject_id)->first();


        return view('pages.replies', [
            'replies' => Reply::where("topic_id", $topic_id)->get(),
            'topic' => $topic,
            'subject' => $subject,
        ]);
    }

    public function store($topic_id)
    {
        request()->all();
        // stores the create form 
        
        $reply = new Reply();
        $reply->content = request('content');
        $reply->topic_id = $topic_id;
        $reply->save();
        $topic = Topic::where("id", $topic_id)->first()->name;
        $url = "/replies/".$topic;

        return redirect($url);
    }






}