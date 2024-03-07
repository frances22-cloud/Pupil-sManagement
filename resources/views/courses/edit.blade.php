@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Subject</div>
  <div class="card-body">
      
      <form action="{{ url('courses/' .$courses->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$courses->id}}" id="id" />

        <label>Subject Name:</label>
        <input type="text" name="subject_name" id="name" value="{{$courses->subject_name}}" class="form-control"></br>

        <label>Grade:</label>
        <input type="text" name="grade_level" id="grade_level" value="{{$courses->agrade_level}}" class="form-control"></br>
        

        <label>Teacher:</label>
        <input type="text" name="teacher_in_charge" id="teacher_in_charge" value="{{$courses->teacher_in_charge}}" class="form-control"></br>

        <label>Description:</label>
        <input type="text" name="description" id="description" value="{{$courses->description}}" class="form-control"></br>

        <!-- <label>Class:</label></br>
        <input type="text" name="class" id="class" value="{{$courses->class}}" class="form-control"></br> -->

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>

@stop