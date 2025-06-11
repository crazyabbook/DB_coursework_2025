<?php
include "functions.php";
$info=getAllClassesInfo();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="design.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Школьное сообщество - Классы</title>
    </head>
    <body>
        <nav class="nav"> 
                <ul> 
                    <li><a href="main.php">Главная</a></li>
                </ul> 
            </nav>
        <h1>Данные о классах</h1>
        <div>
            <table>
                <thead><th>Код</th><th>Классный руководитель</th><th>Номер</th><th>Буква</th></thead>
                <?php
                for($i=0; $i<count($info); $i++)
                {
                    $id=$info[$i]["class_id"];
                    $master=$info[$i]["passport_data"];
                    $number=$info[$i]["number"];
                    $letter=$info[$i]["letter"];
                    echo "<tr><td>$id</td><td>$master</td><td>$number</td><td>$letter</td></tr>";
                }
                ?>
            </table>
        </div>
    </body>
</html>