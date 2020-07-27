<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class commentscontroller extends Controller
{
    //
    public function save(Request $req){
        
        //return $req->all();
        //return view('index');
        //print_r($req->input());
        $comment = new Comment;
        $comment->name= $req->name;
        $comment->email= $req->email;
        $comment->contact= $req->contact;
        $comment->body= $req->body;
        //$comment->ddate= '08-07-2020';
        $comment->save();
        return redirect('/');
    }
}
