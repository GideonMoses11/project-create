@extends('layouts.master')

@section('content')

<div class ="container jumbotron">
<br>
<h3>Gedoni's CRUD System</h3>
<div class ="content-center">
<div class ="row">
<div class ="col-md-6">
<a href="{{route('database')}}" class ="btn btn-primary">Records</a>

@if(session()->has('Success'))
<div class ="alert alert-primary">
    {{session()->get('Success')}}
</div>
@endif
<form action ="{{route('create')}}" method ="POST">
@csrf
<div class ="form-group">
<label>Title:</label><input type ="text" class ="form-control" placeholder ="enter title" name ="title" required>
</div>
<div class ="form-group">
<label>Name:</label><input type ="text" class ="form-control" placeholder ="enter name" name ="name" required>
</div>
<div class ="form-group">
<label>Message:</label><textarea class ="form-control" placeholder ="enter name" name ="message" required></textarea>
</div>
<div class ="form-group">
<button type ="submit" class ="btn btn-primary float-right">Add Post</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection