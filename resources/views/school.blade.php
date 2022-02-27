<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>school</title>
</head>
<body>
    <div>
        <h1>create a new school</h1>
        <form action="/school" method="POST">
            @csrf
            <lable for="schoolname">school name:</lable>
            <input type="text" name="schoolname"><br>
            <lable for="address">address:</lable>
            <input type="text" name="address"><br>
            <input type="submit" value="create">
        </form>
        <a href="/" ><- back to home</a>
    </div>
</body>
</html>