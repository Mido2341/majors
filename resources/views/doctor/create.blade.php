@extends('adminlte::page')
@section('title','Create Doctor')
@section('content')

@if ($errors->any())
    <div class="alert alert-info">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('doctor.store')}}"  method="post" enctype="multipart/form-data">

@csrf

<div class="p-3 mb-2 bg-secondary text-white">Create Doctore</div>

<div class="row g-2">
    <div class="col-md">
      <div class="form-floating">
        <label for="floatingInputGrid">NAME :</label>
        <input type="text" class="form-control w-50" value="{{old('name')}}" name="name" id="name" placeholder="Mohamed">
      </div>

        <div class="row g-2">
        <div class="col-md">
          <div class="form-floating">
            <label for="email">Email address :</label>
            <input type="email" class="form-control w-50" value="{{old('email')}}" name="email" id="email" placeholder="name@gmail.com">
          </div>

          <div class="row g-2">
            <div class="col-md">
              <div class="form-floating">
                <label for="city">CITY :</label>
                <input type="text" class="form-control w-50" value="{{old('city')}}" name="city" id="city" placeholder="Cairo">
              </div>

              <div class="row g-2">
                <div class="col-md">
                  <div class="form-floating">
                    <label for="password">PASSWORD :</label>
                    <input type="password" class="form-control w-50" name="password" id="password" placeholder="*********" >
                  </div>

                  <select class="custom-select w-50" aria-label="Default select example" name="major_id">
                    <option selected>select major</option>
                    @foreach ( $majors as $major )
                    <option    @if ( old('major_id')==$major->id)
                        selected
                    @endif value="{{$major->id}}">{{$major->title}}</option>
                    @endforeach

                  </select>

{{-- <label for="exampleInputFile">IMAGE :</label> --}}
<div class="mb-3 w-50" >
    <label for="formFile" class="form-label">IMAGE :</label>
    <input class="form-control" type="file" value="{{old('image')}}" name="image" id="formFile">
  </div>
  </div>
<input type="submit" class="btn btn-primary">


</form>
@endsection
