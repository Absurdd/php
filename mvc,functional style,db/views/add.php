<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form action="/add.php" method="post" enctype="multipart/form-data">
    <label for="title">Название</label>
    <input type="text" id="title" name="title">
    <br>
    <label for="image">Файл</label>
    <input type="file" id="image" name="image">
    <br>
    <input type="submit">
</form>

<a href="/index.php">Вернуться на главную страницу</a>

</body>
</html>