@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Enter Subject Details</div>
  <div class="card-body">
      <form action="{{ url('courses') }}" method="post">
        {!! csrf_field() !!}

        <label>Subject Name:</label>
        <select id="subject_name" name="subject_name" required>
            <option value="english">English</option>
            <option value="mathematics">Mathematics</option>
            <option value="science">Science</option>
            <option value="R.E">Religious Edu</option>
            <option value="lit 1">Lit 1</option>
            <option value="lit 2">Lit 2</option>
            <option value="sst">SST</option>
            <option value="swahili">Swahili</option>
        </select></br>
      
        <label for="classField">Grade:</label>
        <select id="classField" name="class" required>
            <option value="p1">p1</option>
            <option value="p2">p2</option>
            <option value="p3">p3</option>
            <option value="p4">p4</option>
            <option value="p5">p5</option>
            <option value="p6">p6</option>
            <option value="p7">p7</option>
        </select><br>

        <label>Teacher in charge:</label></br>
        <input type="text" name="teacher_in_charge" id="teacher_in_charge" class="form-control" placeholder="Incharge" required></br>

        <label>Description:</label></br>
        <input type="textarea" name="description" id="description" class="form-control" placeholder="Enter description" required></br>

        <input type="submit" value="Save" class="btn btn-success">
    </form>
   
  </div>
</div>
@stop