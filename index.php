<?php
$n = 0;
function Fibonachi ($n){
    if($n == 1) return 1;
    if ($n == 2) return 1;
    if($n >= 3) return  Fibonachi($n -1) + Fibonachi($n-2);
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Задание №2 - числа Фибоначчи </title>
</head>

<body>
<form action="index.php" method="get">
    <b>Введите число N: </b>
    <input  type="text" name="press">
    <input  type="submit" value="send"><br><br>
    <?$a = ($_GET['press']);

    for($i = 0; $i <= $a; $i++){
    echo Fibonachi($i);
    echo "  ";
    }
    ?>
</form>


</body>

</html>