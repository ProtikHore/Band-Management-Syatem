<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Homecontroller extends Controller
{
   public function index(){
       $song =DB::table('Contents')->join('accounts','accounts.userid','=','contents.userid')->get();
       return view('homepage.index')->with('song',$song);
   }
}
