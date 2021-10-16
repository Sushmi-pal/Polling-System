@extends('layouts.app')
@section('content')
@for($i=0; $i<count($a); $i++)
    {{$opt[$i]->name}}
    {{($a[$i]/$row)*100}}
    <br>
@endfor
@endsection
