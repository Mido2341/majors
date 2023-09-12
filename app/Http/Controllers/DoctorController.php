<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Major;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::with('major','rates')->paginate(5);
        return view('doctor.index', compact('doctors'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $majors=Major::get();
        return view('doctor.create',compact('majors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->all();
        Validator::make($data,[

            'name'=>['required','string','min:4','max:50'],
            'email'=>['required','email','unique:doctors,email'],
            'password'=>['required','min:8','max:30'],
            'image'=>['required','image'], ])->validate();

        $data['password'] = Hash::make($request->passwrd);
        $file_image= $request->file('image')->store('public');
        $file_image= str_replace('public','storage',$file_image);
        $data['image'] = $file_image;
        Doctor::create($data);
        return redirect('/doctor');
    }

    /**
     * Display the specified resource.
     */
    public function show( Doctor $doctor)
    {
       return view('doctor.show',compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {
       return view('doctor.update',compact('doctor'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctor $doctor)
    {
         $doctor->update($request->all());
         return redirect()->route('doctor.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         Doctor:: where('id',$id)->delete();
        return redirect()->route('doctor.index');
    }
}
