@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Enter Teacher's Details</div>
  <div class="card-body">
      <form action="{{ url('teachers') }}" method="post">
        {!! csrf_field() !!}

        <label>Full Name:</label></br>
        <input type="text" name="FullName" id="name" class="form-control" placeholder="Enter teacher's names" required></br>

        <label>Address:</label></br>
        <input type="text" name="address" id="address" class="form-control" placeholder="Enter Address" required></br>

        <label>Mobile:</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Enter mobile" required></br>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required><br>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select></br>
       
        <label for="classField">Class:</label>
        <select id="classField" name="class" required>
            <option value="p1">p1</option>
            <option value="p2">p2</option>
            <option value="p3">p3</option>
            <option value="p4">p4</option>
            <option value="p5">p5</option>
            <option value="p6">p6</option>
            <option value="p7">p7</option>
        </select><br>
        <input type="submit" value="Save" class="btn btn-success">
    </form>
   
  </div>
</div>
@stop