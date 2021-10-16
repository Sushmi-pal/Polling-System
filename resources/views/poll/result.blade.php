<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
@for($i=0; $i<count($a); $i++)
    {{$opt[$i]->name}}
    {{($a[$i]/$row)*100}}
    <br>
@endfor
</body>
</html>
