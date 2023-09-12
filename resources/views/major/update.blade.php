@extends('adminlte::page')
@section('title','Update Major')
@section('content')

<form action=" {{route('major.update',$major->id)}}" method="post">
    @method('put')
    @csrf
    <input type="text" value="{{$major->title}}" class="form control" name="title">

    <button type="submit" class="btn btn-primary mb-3">save</button>
</form>
@endsection
