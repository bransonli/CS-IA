<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Topic;
use App\Models\Subject;
use App\Models\Reply;

class TopicController extends Controller
{
    public function show($subject)
    {
        $subject_id = Subject::where("name", $subject)->first()->id;

        return view('pages.topics', [
            'topics' => Topic::where("subject_id", $subject_id)->get(),
            'subject' => $subject
        ]);
    }

    public function create($subject)
    {
        // shows view to create new resource 
        return view('pages/create_topic', [
            'subject' => Subject::where("name", $subject)->first()

        ]);

    }

    public function store()
    {
        request()->all();
        // stores the create form 
        
        
        $topic = new Topic();
        $topic->name = request('name');
        $topic->subject_id = request('subject_id');
        $topic->save();
        $subject = Subject::where("id", $topic->subject_id)->first()->name;
        $url = "/topics/".$subject;

        return redirect($url);
    }


    public function edit($id)
    {
        // show a form to edit an existing item 
        $topic = Topic::where('id' , $id)->first();
        return view('pages.edit_topic', [ 'topic' => $topic]);
        
    }

    public function update($id)
    {
        //submission of the update form 
        $topic = Topic::find($id);
        $topic->name = request('name');
        $topic->save();
        $subject = Subject::where("id", $topic->subject_id)->first()->name;

        $url = "/topics/".$subject;
        return redirect($url);
    }


    public function destroy($id)
    {
        //remove the stored resource 
        request()->all();
        $topic = Topic::find($id);
        $subject = Subject::where("id", $topic->subject_id)->first()->name;
        Reply::where("topic_id", $topic->id )->delete();
        Topic::find($id)->delete();
        $url = "/topics/".$subject;

        return redirect($url);
    }





}