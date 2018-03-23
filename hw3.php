<?php
$json_data = file_get_contents('book.json');
$dec_json = json_decode($json_data, true);

?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Задание №3 </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style type="text/css">
        body {
            background-image: url(http://wallpaperscraft.ru/image/ajsberg_antarktida_ldina_okean_106996_3840x2400.jpg); /* Путь к фоновому изображению */

            width: auto;
            height: auto;
        }

        .brd {
            border: 2px double rgba(0, 0, 1, 0.2); /* Параметры границы */
            background: rgba(0, 0, 3, 0.05); /* Цвет фона */
            padding: 10px; /* Поля вокруг текста */
            border-radius: 6px;
        }

        IMG.displayed {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        P {
            text-align: center
        }
    </style>
</head>

<body>


<div class="brd" style="margin: 0 auto; width: 270px; margin-top: 15%">

    <table border="1">

        <?php
        $city = "Ульяновск";
        $appid = "2aae63eafc2b63adfa86d0b622e0ef72";
        $mode = "json";
        $units = "metric";
        $lang = "ru";


        $url_weather = "http://api.openweathermap.org/data/2.5/weather?q=$city&appid=$appid&units=$units&lang=$lang";
        //$url_weather1 = "http://api.openweathermap.org/data/2.5/weather?q=moscow&appid=2aae63eafc2b63adfa86d0b622e0ef72";


        $data = file_get_contents($url_weather);
        $array_days = json_decode($data);
        $icon = $array_days->weather[0]->icon;

        echo "<h1 align='center'>" . $city . "</h1><br>";//город
        echo "<IMG class='displayed' src='http://openweathermap.org/img/w/$icon.png' alt= 'иизи'> ";//картинка


        echo "<h1 align='center'> " . $array_days->main->temp . "&deg С</h1>";//температура
        echo "<hr align=\"center\" width=\"100%\" size=\"50\" color='#000000' />";//просто полоска

        echo " <b>Осадки: </b> " . $array_days->weather[0]->description . "<br>";//состояние
        echo " <b>Скорост ветра: </b> " . $array_days->wind->speed . " м/с<br>";
        echo " <b>Давление: </b> " . $array_days->main->pressure . " каких - то едениц<br>";
        echo " <b>Влажность: </b> " . $array_days->main->humidity . " %<br>";


        ?>
    </table>

</body>
</html>