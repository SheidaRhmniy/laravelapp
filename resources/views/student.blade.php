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
        <h1>create a new student</h1>
        @include('notifyMsg')
        <form action="/student" method="POST">
            @csrf
            <lable for="firstName">first name:</lable>
            <input type="text" name="firstName"><br>
            <lable for="lastName">last name:</lable>
            <input type="text" name="lastName"><br><br>
            <input type="submit" value="create">
        </form>
        <a href="/" ><- back to home</a>
    </div>
</body>
</html>