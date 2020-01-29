@extends('layouts.master')

@section('content')
<form method ="post" action ="{{route('update', $iphone->id)}}">
    @csrf
    @Method('put')
<div class="row">
<div class="col-sm-6">
<div class ="form-group">
<label>Name:</label><input type ="text" class ="form-control" placeholder ="enter name" name ="name" required value ={{$iphone->name}}>
</div>
<div class ="form-group">
<label>Title:</label><input type ="text" class ="form-control"  placeholder ="enter title" name ="title" required value={{$iphone->title}}>
</div>
<div class ="form-group">
<label>Message:</label><textarea class ="form-control" placeholder ="enter name" name ="message" required>{{$iphone->message}}</textarea>
</div>
<div class ="form-group">
    
<button type ="submit" class ="btn btn-primary float-right">Update Post</button>
</form>


    
</div>
</div>
</div>
@endsection