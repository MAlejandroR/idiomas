<?php
$a = $_POST['a'];
var_dump ($a);

?>

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
<form action="a.php" method="POST">
    <input type="text" name="a" value ="a"><br />
    <input type="text" name="a[]" value ="bvc"><br />
    <input type="text" name="a[]" value ="v"><br />
    <input type="text" name="a[]" value ="d"><br />
    <input type="text" name="a[]" value ="e"><br />
    <input type="text" name="a[]" value ="f"><br />
    <input type="text" name="a[]" value ="g"><br />
    <input type="text" name="a[]" value ="fin"><br />
    <input type="submit" value="Enviar">




</form>

</body>
</html>
