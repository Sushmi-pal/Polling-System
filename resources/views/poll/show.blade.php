<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
@foreach($que as $q)
    <a href="{{route('user.show', $q->id)}}">{{$q->name}}</a> <br>
@endforeach
</body>
</html>
