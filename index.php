<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=500, initial-scale=1.0">
    <title>Uploder</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="process.php" method="post" enctype="multipart/form-data">
    Email :<input type="text" name="email"><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    File :<input type="file" name="pic"><br><br>
    <input type="submit" name="btnsubmit"> &nbsp;&nbsp;&nbsp;
    <input type="reset" name="btnreset">
    </form>
</body>
</html>