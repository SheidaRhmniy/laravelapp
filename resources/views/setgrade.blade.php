<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <title>set grade</title>
</head>
<body>
@include('notifyMsg')
    <div>
        <h1>create a new record</h1>
        <form action="/setgrade" method="POST">
            @csrf 
            <select name="classid">
                <option>select class...</option>
                @foreach($classes as $class)
                <option value="{{ $class->id}}"> {{$class->className}}</option>
                @endforeach
            </select>
            <select name="studentid">
                <option>select student...</option>
                @foreach($students as $student)
                <option value="{{ $student->id}}"> {{$student->firstName.' '.$student->lastName}}</option>
                @endforeach
            </select><br><br><br>
            <lable for="grade">grade:</lable>
            <input type="number" name="grade"><br>
            <input type="submit" value="create">
        </form>
        <a href="/" ><- back to home</a>
    </div>
</body>
</html>