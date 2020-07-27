<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Register;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class editcontroller extends Controller
{
    //
    public function save(Request $req){
        //$user = Auth::user();
        $user = auth()->user();
        $id = $user->id;
        
        if($req->hasFile('pic')){

            $user = DB::table('users')
            ->where('users.id', $id)
            ->get();
        
            foreach($user as $ser){
               $oldpic = $ser->pic;
               $phone = $ser->contact;
            }
            
            $default = 'featured-speaker.jpg';
            if($oldpic = $default ){

                $ext = $req->pic->extension();
                $pic = "'$phone.$ext'";
                    
                $req->pic->storeAs( 'public', $pic);
                    
                $newpic = DB::table('users')
                ->where('users.id', $id)
                ->update(['pic' => $pic]);
                
            }else{
                if(Storage::delete("public/$oldpic")){
                
                    $ext = $req->pic->extension();
                    $pic = "'$phone.$ext'";
                    
                    $req->pic->storeAs( 'public', $pic);
                    
                    $newpic = DB::table('users')
                    ->where('users.id', $id)
                    ->update(['pic' => $pic]);
                }else{
                    return 'please contact the site admin for help';
                }
            }
            
        }elseif($req->has('newval') && !empty($req->input('newval'))){

            $newval= "$req->newval";
            $action= "$req->field";

            $newvalue = DB::table('users')
            ->where('users.id', $id)
            ->update([$action => $newval]);
            //return 'has two';
            return redirect('/home');
        }else{
            return 'error please try again';
        }
        //return 'continue';

    }
}
