<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>school</title>
</head>
<body>
    <div>
        <h1>create a new class</h1>
        <form action="/class" method="POST">
            @csrf
            <select name="schoolid">
                <option>select school...</option>
                @foreach($schools as $school)
                <option value="{{$school['schoolid']}}"> {{$school['schName']}}</option>
                @endforeach
            </select><br>
            <lable for="classname">class name:</lable>
            <input type="text" name="classname"><br>
            <lable for="capacity">capacity:</lable>
            <input type="number" name="capacity"><br>
            <lable for="type">type:</lable>
            <input type="text" name="type"><br><br>
            <input type="submit" value="create">
        </form>
        <a href="/" ><- back to home</a>
    </div>
</body>
</html>