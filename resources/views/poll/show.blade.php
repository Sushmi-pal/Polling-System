@extends('layouts.app')
@section('content')
@foreach($que as $q)
    <a href="{{route('user.show', $q->id)}}">{{$q->name}}</a> <br>
@endforeach
</body>
</html>
@endsection
