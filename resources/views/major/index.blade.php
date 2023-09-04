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
@section('content')
<table>
      <thead>
      <th>id</th>
      <th>title</th>
      <th>created_at</th>
      <th>action</th>
      </thead>
      <tbody>
           @foreach ($majors as $major)
          <tr>
          <td> {{$major->id}}</td>
          <td> {{$major->title}}</td>
          <td> {{$major->created_at}}</td>
          <td>
          <form action="{{route('majors.delete',$major->id)}}">
              <button>delete</button>

          </form>
          </td>
      </tr>
              @endforeach
  </table>
{{-- @endsection --}}

@endsection
{{-- @section('content')
<x-sweet-alert type="danger" :message="$message"/> --}}
  <table>
        <thead>
        <th>id</th>
        <th>title</th>
        <th>created_at</th>
        <th>action</th>
        </thead>
        <tbody>
             @foreach ($majors as $major)
            <tr>
            <td> {{$major->id}}</td>
            <td> {{$major->title}}</td>
            <td> {{$major->created_at}}</td>
            <td>
            <form action="{{route('majors.delete',$major->id)}}">
                <button>delete</button>

            </form>
            </td>
        </tr>
                @endforeach
    </table>
{{-- @endsection --}}
