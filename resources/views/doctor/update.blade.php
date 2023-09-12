@extends('adminlte::page')
@section('title','update Doctor')
@section('content')
<form action="{{route('doctor.update',$doctor->id)}}" method='post'>
    @method('put')
    @csrf
<input type="text" value="{{$doctor->name}}"  class="form control" name="name"   >
<input type="text" value="{{$doctor->email}}" class="form control" name="email"   >
<input type="text" value="{{$doctor->city}}" class="form control" name="city"   >
<input type="text" value="{{$doctor->major->title}}" class="form control" name="title"   >


<button type="submit" class="btn btn-primary mb-3">save</button>

</form>

@endsection
