<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="profile" method="POST" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <input type="file" name="photo">

    <hr>
    <button type="submit">Enviar</button>
</form>
</body>
</html>
