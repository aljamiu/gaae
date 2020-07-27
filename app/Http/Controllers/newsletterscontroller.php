<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsletter;

class newsletterscontroller extends Controller
{
    //
    public function save(Request $req){
        
        //return $req->all();
        //return view('index');
        //print_r($req->input());
        $new = new Newsletter();
        $new->email= $req->email;
        //$new->ddate= '03-04-2020';
        $new->save();
        return redirect('/home');
    }
}
