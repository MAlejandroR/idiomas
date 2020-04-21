<?php
if (isset($_POST['submit'])) {
    $new_idioma=$_POST['new_idioma'];
    $array_idiomas=$_POST['array_idioma'];
    $array_idiomas[]=$new_idioma;
    $idioma_select = $_POST['lista_idiomas'];
}

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
<fieldset>
    <h3> Idioma seleccionado <?=$idioma_select?></h3>
    <form action="index.php" method="POST">
        <legend>Agregar idioma</legend>
        Idioma
        <input type="text" name="new_idioma" id="">
        <select name="lista_idiomas" id="">
            <?php
            foreach($array_idiomas as $idioma){
                echo "<option name='$idioma' >$idioma</option>";
            }
            ?>
        </select>
        <?php
        foreach($array_idiomas as $idioma){
            echo "<input type=hidden name='array_idioma[]' value='$idioma' >";
        }



        ?>
        <input type="submit" value="Add" name="submit">
    </form>
</fieldset>


</body>
</html>