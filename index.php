<?php
$name = "Kamil";
$years = 19;
$email = "ab.kam@yandex.ru";
$information = "I want to study some programming language, and English language. It that all (:";

echo "<br><b>задание 1.1</b> <br><br>";
echo "<b>My name is: </b> $name <br><b>How old i'm:</b> $years<br> <b>My e - mail adress: </b> $email<br> <b> Information about me: </b> $information<br><b>How to contact me?</b><a href='https://vk.com/feed'> my page in vk</a> <br>";





$randValue = rand(1,7);
echo "<br><br><b>задание 1.2</b> <br><br>";
echo "<b>Выведем, дни от случайного до  понедельника </b><br>";
echo "<b>Начальное день(случайный): </b><br>";
switch ($randValue){
    case "1" : echo "Понедельник <br>"."-Вторник"."-Среда"."-Четверг"."-Пятница"."-Суббота"."-Воскресенье";    break;
    case "2" : echo "Вторник<br>"."-Среда"."-Четверг"."-Пятница"."-Суббота"."-Воскресенье";break;
    case "3" : echo "Среда<br>"."-Четверг"."-Пятница"."-Суббота"."-Воскресенье";break;
    case "4" : echo "Четверг<br>"."-Пятница"."-Суббота"."-Воскресенье";break;
    case "5" : echo "Пятница<br>"."-Суббота"."-Воскресенье";break;
    case "6" : echo "Суббота<br>"."-Воскресенье";break;
    case "7" : echo "Воскресенье<br>"."Это последний день недели! Следующий - Понедельник";break;
}
?>