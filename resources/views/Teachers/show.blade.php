
@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Teacher's details</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $teachers->FullName }}</h5>
        <p class="card-text">Address : {{ $teachers->address }}</p>
        <p class="card-text">Mobile : {{ $teachers->mobile }}</p>
        <p class="card-text">Gender: {{ $teachers->gender }}</p>
        <p class="card-text">Class : {{ $teachers->class }}</p>
  </div>
    </hr>
  
  </div>
</div>
@endsection