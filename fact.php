<?php
include "functions.php";
$info=getAllFactInfo();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="design.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Учебная нагрузка - Фактическая нагрузка</title>
    </head>
    <body>
        <nav class="nav"> 
            <ul> 
                <li><a href="main.php">Главная</a></li>
            </ul> 
        </nav>
        <h1>Данные фактической нагрузки</h1>
        <div>
            <table>
                <thead><th>Код</th><th>Преподаватель</th><th>Класс</th><th>Предмет</th><th>Дата</th><th>Количество часов</th></thead>
                <?php
                for($i=0; $i<count($info); $i++)
                {
                    $id=$info[$i]["fact_id"];
                    $teacher=$info[$i]["passport_data"];
                    $class=$info[$i]["class"];
                    $subject=$info[$i]["name"];
                    $date=$info[$i]["fact_date"];
                    $time=$info[$i]["fact_hours"];
                    echo "<tr><td>$id</td><td>$teacher</td><td>$class</td><td>$subject</td><td>$date</td><td>$time</td><td><a href='updateFact.php?id=", $id, "'>...</a></td><td><a href='controller/deleteFactController.php?id=", $id, "'>X</a></td></tr>";
                }
                ?>
            </table>
        </div>
        <button type="submit" name="add"><a href="addFact.php">Добавить</a></button>
    </body>
</html>