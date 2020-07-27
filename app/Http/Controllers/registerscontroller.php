<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;
use Illuminate\Support\Facades\Storage;

class registerscontroller extends Controller
{
    //
    public function save(Request $req){
        
        //return $req->all();
        //return view('index');
        //print_r($req->input());
        
        if($req->hasFile('pic')){
            $ext = $req->pic->extension();
            $pic = "$req->contact.$ext";
            //return $pic;
            //return $req->contact;
            //return $pic;
            //return $ext;
            $req->pic->storeAs( 'public', $pic);
        }else{
            return 'no image';
        }
        //return 'continue';


        $user = new Register();
        $user->name= $req->name;
        $user->username= $req->username;
        $user->email= $req->email;
        $user->region= $req->region;
        $user->contact= $req->contact;
        $user->upassword= $req->password;
        $user->icon= 0;
        //$user->pic= 'images/speakers/featured-speaker.jpg';
        $user->pic= $pic;
        //$user->joined= '08-07-2020';
        $user->save();
    }
}
