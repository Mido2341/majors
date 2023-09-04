<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;


class MajorController extends Controller
{
    //
    function index()
    {
        $majors = Major::get();
        return view('major.index',compact('majors'));
    }
    function destroy($id)
{
$major= Major:: find($id);
$major->delete();
return redirect('/majors');
}
}
