<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;


class MajorController extends Controller
{
    //
    function index()
    {
        $majors = Major::paginate(5);
        return view('major.index',compact('majors'));
    }



 function destroy($id)
{
$major= Major:: find($id);
$major->delete();
return redirect('/majors');
}



function edit($id)
{
    $major= Major::find($id);
    return view('major.update',['major'=>$major]);

}
function update( $id,Request $request)
{
    $major= Major::find($id);
    // $major->update(["title"=>$request->title]);
    $major->title=$request->title ;
    $major->save();

    return  redirect()->route( 'majors.index');

    // $major=Major::where('id',$id)->updete(["title" => $request->title]);
}
function create()
{
return view('major.create');
}
function store(Request $request)
{
    Major::create(['title'=>$request->title]);
    return  redirect()->route( 'majors.index');
}
public function show( Major $major)
    {
       return view('major.show',compact('major'));
    }

}

