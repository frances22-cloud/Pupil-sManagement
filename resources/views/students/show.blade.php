@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Pupil's details</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->FullName }}</h5>
        <p class="card-text">Address : {{ $students->address }}</p>
        <p class="card-text">Mobile : {{ $students->mobile }}</p>
        <p class="card-text">Gender: {{ $students->gender }}</p>
        <p class="card-text">Class : {{ $students->class }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection