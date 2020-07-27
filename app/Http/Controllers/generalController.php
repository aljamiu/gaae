<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

//import general model here

class generalController extends Controller
{

    public function index(){

        $p = DB::table('projects')->get();

        $hp = DB::table('projects')
        ->where('category', 'human')
        ->get();

        return view('index', ['project'=> $p, 'hp'=> $hp]);

    }

    ///
    public function home(){

        $user = Auth::user();
        //$user = auth()->user();
        $id = $user->id;

        $u = DB::table('users')
        ->where('users.id', $id)
        ->get();

        $s = DB::table('users')
        ->join('subscriptions', 'users.id', 'subscriptions.userid')
        ->where('users.id', $id)
        ->get();

        return view('home', ['user'=> $u, 'sub'=> $s]);

    }

    public function subscriptions1(){
        
        $user = Auth::user();
        //$user = auth()->user();
        $id = $user->id;

        $p = DB::table('subscriptions')
        ->get();

        $s = DB::table('users')
        ->join('subscriptions', 'users.id', 'subscriptions.userid')
        ->where('users.id', $id)
        ->get();

        $c = DB::table('users')
        ->join('subscriptions', 'users.id', 'subscriptions.userid')
        ->get();

        return view('student', ['allsub'=> $p, 'sub'=> $s, 'icon'=> $c]);

    }

    public function subscriptions2(){
        
        $user = Auth::user();
        //$user = auth()->user();
        $id = $user->id;

        $p = DB::table('subscriptions')
        ->get();

        $s = DB::table('users')
        ->join('subscriptions', 'users.id', 'subscriptions.userid')
        ->where('users.id', $id)
        ->get();

        $c = DB::table('users')
        ->join('subscriptions', 'users.id', 'subscriptions.userid')
        ->get();

        return view('standard', ['allsub'=> $p, 'sub'=> $s, 'icon'=> $c]);

    }

    public function news(){

        $prog = DB::table('programs')->paginate();

        return view('news', ['progs'=> $prog]);

    }

    public function pastevents(){

        $prog = DB::table('programs')->paginate();

        return view('past-events', ['progs'=> $prog]);

    }

    public function upcomingevents(){

        $prog = DB::table('programs')->paginate();

        return view('upcoming-events', ['progs'=> $prog]);

    }

    public function about(){

        $c = DB::table('users')
        ->join('subscriptions', 'users.id', 'subscriptions.userid')
        ->get();

        $p = DB::table('subscriptions')
        ->get();

        return view('about', ['icon'=> $c, 'allsub'=> $p]);

    }
}
