@extends('adminlte::page')
@section('title','Create Major')
@section('content')

<form action=" {{route('major.store')}}" method="post">
@csrf
    <input type="text" class="form control" name="title">

    <button type="submit" class="btn btn-primary mb-3">save</button>
</form>
@endsection
