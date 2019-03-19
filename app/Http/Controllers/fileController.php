<?php
namespace App\Http\Controllers;
//namespace BulletProof;


use App\Contents;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function MongoDB\BSON\toJSON;

class fileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('User.upload');
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
        $fileupload = new Contents();
        $fileupload->filename = $request->FileName;
        $fileupload->upload_date = Carbon::now();
        $fileupload->userid = session()->get('loggedUser')->userid;
        $fileupload->filetype=$request->FileType;
        $fileupload->category=$request->FileCategory;
        if($request->hasFile('UploadFile'))
        {
            $file = $request->file('UploadFile');
            $filename= session()->get('loggedUser')->userid.'-'.rand(1000,9999).'.'.$file->getClientOriginalExtension();
            $file->move('uploads/file', $filename);
            $fileupload->file=$filename;

        }
        if($request->hasFile('Thumbnail'))
        {
            $file = $request->file('Thumbnail');
            $filename= session()->get('loggedUser')->userid.'-'.rand(1000,9999).'.'.$file->getClientOriginalExtension();
            $file->move('uploads/file', $filename);
            $fileupload->filepicture=$filename;

        }

        $fileupload->save();

    return redirect()->route('home.index')->with('videoupload','File Uploaded Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $account =DB::table('accounts')
            ->join('Contents','Contents.userid','=','accounts.userid')
            ->where('accounts.userid',$id)->get();
        return view ('User.usersong')->with('post',$account);
    }
    public function showsong($id)
    {
        $song = DB::table('Contents')->where('fileid', $id)->first();

        return view('User.single')->with('song',$song);
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
