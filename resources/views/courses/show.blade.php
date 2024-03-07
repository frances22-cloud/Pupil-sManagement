@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Subject details</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Subject Name : {{ $courses->subject_name }}</h5>
        <p class="card-text">Grade : {{ $courses->grade_level}}</p>
        <p class="card-text">Teacher In charge : {{ $courses->teacher_in_charge }}</p>
        <p class="card-text">Description: {{ $courses->description }}</p>
  </div>
    </hr>
  </div>
</div>
@endsection