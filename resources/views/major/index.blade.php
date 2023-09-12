{{-- @extends('layout')
@section('title','majors')
@section('sidbar')
@parent
<p>this appended project</p>
@endsection --}}

{{-- @php
    $message='Created Succefully';
@endphp --}}
@extends('adminlte::page')
@section('title','Clinic--Major list')
@section('content')

<a href="{{route('major.create')}}" class='btn btn-primary' >Create Major</a>

<table class="table">

      <thead class="table table-secondary">
      <th scope="col">id</th>
      <th scope="col">title</th>
      <th scope="col">created_at</th>
      <th scope="col">updated_at</th>

      <th scope="col">action</th>
      </thead>

      <tbody class="table table-success table-striped-columns">
           @foreach ($majors as $major)
          <tr>
          <td> {{$major->id}}</td>
          <td> {{$major->title}}</td>
          <td> {{$major->created_at}}</td>
          <td> {{$major->updated_at}}</td>
          <td class="d-flex">
          <form action="{{route('major.destroy',$major->id)}}" method ="post">
            @method('DELETE')
            @csrf
              <button class='btn btn-dark'>delete</button>
          </form>

         <a href="{{route('major.edit',$major->id)}}" class='btn btn-success'>update</a>
         <a href="{{route('major.show',$major->id)}}" class='btn btn-secondary'>Show</a>
          </td>
          </tr>
              @endforeach
  </table>
  {{$majors->links()}}
@endsection

