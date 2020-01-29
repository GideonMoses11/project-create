@extends('layouts.master')

@section('content')
@if(session()->has('success'))
<div class ="alert alert-primary">
    {{session()->get('success')}}
</div>
@endif
<div class="row">
<div class ="col-md-6">
<div class ="table-responsive table-striped">
<div class ="table">
<table>
<thead>
{{-- <th>S/N</th> --}}
<th>ID</th>
<th>Title</th>
<th>Name</th>
<th>Message</th>
<th>Created at</th>
<th>Action</th>
</thead>
<tbody>
@foreach($iphone as $iphone)
<tr>
{{-- <th scope ="row">{{$loop->index + 1}}</th> --}}
<td>{{$id = $iphone->id}}</td>
<td>{{$iphone->name}}</td>
<td>{{$iphone->title}}</td>
<td>{{$iphone->message}}</td>
<td>{{$iphone->created_at->diffForHumans()}}</td>
<td>
    {{-- <form method ="post" action ="{{route('delete', $iphone->id)}}">
    @csrf
    @Method('delete') --}}
    {{-- <a href ="{{route('edit', $iphone->id)}}" class ="btn btn-info">Edit</a>
    <a href ="{{route('destroy', $iphone->id)}}" class ="btn btn-info">Delete</a> --}}
    {{-- <button type ="submit"  class ="btn btn-info">Edit</button> --}}
    {{-- <button type ="submit"  class ="btn btn-info">Delete</button>
</form> --}}
<form method ="patch" action ="{{route('edit', $iphone->id)}}">
    @csrf
    @Method('patch')
    <button type ="submit"  class ="btn btn-info">Edit</button>
</form>
<form method ="post" action ="/delete/{{$iphone->id}}" >
    @csrf
    @Method('delete')
<button type="submit" name ="delete" class ="btn btn-info">Delete</a>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>

@endsection('content')