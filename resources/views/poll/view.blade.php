<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <title>View your poll</title>
</head>
<body>
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
</body>
</html>

