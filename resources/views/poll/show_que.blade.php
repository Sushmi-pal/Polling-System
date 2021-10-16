@extends('layouts.app')
@section('content')
@foreach($que as $q)
    <a href="#">{{$q->name}}</a> <br>
@endforeach
@endsection
