<?php
include "functions.php";
$info=getAllPlanInfo();
?><html>
    <head> 
        <meta charset="UTF-8">
        <link rel="stylesheet" href="design.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Учебная нагрузка - Плановая нагрузка</title>
    </head>
    <body>
        <nav class="nav"> 
            <ul> 
                <li><a href="main.php">Главная</a></li>
            </ul> 
        </nav>
        <h1>Данные плановой нагрузки</h1>
        <div>
            <table>
                <thead><th>Код</th><th>Преподаватель</th><th>Класс</th><th>Предмет</th><th>Количество часов</th></thead>
                <?php
                for($i=0; $i<count($info); $i++)
                {
                    $id=$info[$i]["plan_id"];
                    $teacher=$info[$i]["passport_data"];
                    $class=$info[$i]["class"];
                    $subject=$info[$i]["name"];
                    $time=$info[$i]["plan_hours"];
                    echo "<tr><td>$id</td><td>$teacher</td><td>$class</td><td>$subject</td><td>$time</td></tr>";
                }
                ?>
            </table>
        </div>
    </body>
</html>