<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <title>Add opinion</title>
</head>
<body>
<form method="post" action="{{route('user.store')}}">
    @csrf
    @for($i=1; $i<=count($q); $i++)
        {{$q[$i-1]->id}}
        {{$q[$i-1]['name']}}<br>
        @foreach($q[$i-1]->options as $opt)
            <div>
                <input type="radio" id="{{$opt->name}}" name="{{$q[$i-1]->id}}" value="{{$loop->iteration}}"
                       checked>
                <label for="{{$opt->name}}">{{$opt->name}}</label>
            </div>
            <br>
        @endforeach<br>
    @endfor
    <button type="submit">Submit</button>
</form>
</body>
</html>

