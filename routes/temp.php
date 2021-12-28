    public function edit($id)
    {
        // show a form to edit an existing item 
        $reply = Reply::where('id' , $id)->first();
        return view('pages.edit_reply', [ 'reply' => $reply]);
        
    }

    public function update($id)
    {
        //submission of the update form 
        $reply = Reply::find($id);
        $reply->name = request('name');
        $reply->save();
        $subject = Subject::where("id", $reply->subject_id)->first()->name;

        $url = "/replys/".$subject;
        return redirect($url);
    }


