@extends('layouts.app')
@section('content')
@for($i=1; $i<=count($q); $i++)
    {{$i}}.
    {{$q[$i-1]['name']}}<br>
    @foreach($q[$i-1]->options as $opt)
        <div>
            <input type="radio" id="{{$opt->name}}" name="opp{{$i}}" value="{{$loop->iteration}}"
                   checked>
            <label for="{{$opt->name}}">{{$opt->name}}</label>
        </div>
        <br>
    @endforeach<br>
    @endfor
    </form>
@endsection

