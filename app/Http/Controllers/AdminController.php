<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = DB::table('accounts')->get();
        //return dd($count);
        return view('admin.dashboard')->with('count',$user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {

    }
    public function showuser()
    {
        $account = DB::table('accounts')->get();

        return view('admin.user')->with('information',$account);
    }
public function manageuser(){
      $account = DB::table('accounts')->get();
        return view('admin.manageuser')->with('information',$account);
}
public function deleteuser($id){
    $account = DB::table('accounts')->where('userid',$id)->first();
   return view('admin.confirm')->with('delete',$account);
}
    public  function confirmdelete($id){
        $account = DB::table('accounts')->where('userid',$id)->delete();
        return redirect()->route('admin.manageuser')->with('message','User Deleted');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
