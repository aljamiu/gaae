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

        $prog = DB::table('programs')
        ->where('category', 'pastprogram')
        ->get();

        return view('index', ['project'=> $p, 'hp'=> $hp, 'program' => $prog]);

    }

    public function region(){

        $p = DB::table('projects')->get();

        $hp = DB::table('projects')
        ->where('category', 'human')
        ->get();

        $rg = DB::table('regions')
        ->where('regionid', '1')
        ->get();

        return view('index', ['project'=> $p, 'hp'=> $hp, 'rigion'=> $rg]);

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

    public function execut(){

        $e = DB::table('users')
        ->join('executives', 'users.id', 'executives.userid')
        ->get();

        return view('executives', ['executive'=> $e]);

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

    public function present_exece(){

        $exec = DB::table('executives')->paginate();

        return view('pres-executive', ['progs'=> $exec]);

    }

    public function past_exec(){

        $exec = DB::table('executives')->paginate();

        return view('past-executive', ['progs'=> $exec]);

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
