<?php
$arr = array("first" => 4, "second" => 19, "third" => 12);
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Задание №3 </title>
</head>


<body>
Первые 5 задач: <br>
<?php
echo "<b>1:</b><br>";
$arr = array("first" => 4, "second" => 19, "third" => 12);
$new_array = array_values($arr);
print("<pre>");
print_r($new_array);
print("<pre><br>");

echo "<b>2:</b><br>";
$new_array2 = array_keys($arr);
print("<pre>");
print_r($new_array2);
print("<pre><br>");
/*
echo "<b>3:</b><br>";
$new_array3 = array_push($arr, "test2");
print("<pre>");
print_r($new_array3);
print("<pre><br>");
*/
echo "<b>4:</b><br>";
$new_array4 = array_reverse($arr);
print("<pre>");
print_r($new_array4);
print("<pre><br>");


?>

</body>

</html>