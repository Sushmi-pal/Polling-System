<html>
@if($errors)
    @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
    @endforeach
@endif
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <title>Create your poll</title>
</head>
<body>
<form id="AddForm" name="addForm" method="post" action="{{route('poll.store')}}">
    @csrf
    <h3>Question</h3>
    <textarea name="question" id="question" style="width: 1202px; height: 50px;"></textarea>
    <h3>Options</h3>
    <div id="option-container">
    </div>
    <ul id="myUL"></ul>
    <a id="add-new-option">Add new option</a><br>
    <button type="submit" id="submit">Submit</button>
</form>
<script src="{{asset('js/create_poll.js')}}">
</script>
</body>
</html>
