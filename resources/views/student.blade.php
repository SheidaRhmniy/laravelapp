<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>school</title>
</head>
<body>
    <div>
        <h1>create a new student</h1>
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