<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;
//use Illuminate\Support\Facades\Storage;

class registerscontroller extends Controller
{
    //
    public function save(Request $req){
        
        if(!empty($req->input('email') && $req->input('name') && $req->input('contact') && $req->input('region'))){
           #
        }else{
            return 'please fill all';
        }
        //return 'continue';


        $genuser = new Register();
        $genuser->name= $req->name;
        $genuser->email= $req->email;
        $genuser->region= $req->region;
        $genuser->contact= $req->contact;
        //$genuser->joined= '08-07-2020';
        $genuser->save();
    }
}
