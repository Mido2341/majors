@extends('adminlte::page')
@section('title','Doctor Details')
@section('content')

<a href="{{route('doctor.create')}}" class='btn btn-primary' >Create Doctor</a>

<table class="table">

      <thead class="table table-secondary">
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">City</th>
      <th scope="col">Imag</th>
      <th scope="col">Major_Title</th>
      <th scope="col">created_At</th>
      <th scope="col">updated_At</th>
      <th scope="col">Action</th>
      </thead>

      <tbody class="table table-success table-striped-columns">
          <tr>
          <td> {{$doctor->id}}</td>
          <td> {{$doctor->name}}</td>
          <td> {{$doctor->email}}</td>
          <td> {{$doctor->city}}</td>
          <td> <img src="{{$doctor->image}}" width="50"> </td>
          <td> {{$doctor->major->title}}</td>
          <td> {{$doctor->created_at}}</td>
          <td> {{$doctor->updated_at}}</td>
          <td>

          <form action="{{route ('doctor.destroy', $doctor->id ) }}" method= "post">
            @method('DELETE')
            @csrf
              <button class='btn btn-dark'>delete</button>

              <a href="{{route('doctor.edit',$doctor->id)}}" class='btn btn-success'>update</a>
          </form>

          </td>
          </tr>
  </table>
@endsection