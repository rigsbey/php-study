<?php
$animals = array("Africa" => array("Zebra", "Giant East African Snail", "Butterflies"),
    "Asia" => array("Dogs", "Chimpanzees", "Tigers"),
    "North America" => array("Procyon lotor", "Lepus europaeus", "Conepatus semistriatus"),
    "South America" => array("Mico leucippe", "Priodontes maximu", "Lontra felina"),
    "Australia" => array("Phascolarctos cinereus", "Tachyglossus aculeatus", "Ornithorhynchus anatinus"),
    "Europe" => array("Canis aureus", "Canis lupus", "Vulpes vulpes")
);
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Задание №3 </title>
</head>

<body>
<table border="2">
    <tr>
        <td>
            <b>Африка: <br> </b>
            <?php
            $gluing = implode($animals["Africa"]);
            echo $gluing;
            ?>
        </td>

        <td>
            <b>Животные из 2 - х слов: <br> </b>
            <?php
            /*
            implode($animals["Asia"]);
            implode($animals["North America"]);
            implode($animals["Europe"]);
            implode($animals["Australia"]);
            implode($animals["South America"]);
            implode($animals["Africa"]);

            echo strpos(implode($animals["Europe"]), " ");
            */
            echo $animals["South America"[3]];
            ?>
        </td>

    </tr>

</table>

<br><a href="hw.php">Не домашнее задание </a>
<a href="hw.php">Задание №3</a>

</body>
</html>