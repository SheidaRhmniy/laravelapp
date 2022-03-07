<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <title>school</title>
</head>
<body>
    <div>
        <h1>create a new school</h1>

        <!-- @if(Session::has('success'))
            <div class="alert alert-success text-center">
                {{Session::get('success')}}
            </div>
        @endif  -->
        @include('notifyMsg')

        <form action="/school" method="POST">
            @csrf
            <lable for="schoolname">school name:</lable>
            <input type="text" name="schName"><br>
            <lable for="address">address:</lable>
            <input type="text" name="address"><br>
            <input type="submit" value="create">
        </form>
        <a href="/" ><- back to home</a>
    </div>
</body>
</html>