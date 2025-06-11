<?php
include "functions.php";
$info=getAllSubjectsInfo();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="design.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Расписание - Учебные дисциплины</title>
    </head>
    <body>
        <nav class="nav"> 
            <ul> 
                <li><a href="main.php">Главная</a></li>
            </ul> 
        </nav>
        <h1>Учебные дисциплины</h1>
        <div>
            <table>
                <thead><th>Код</th><th>Наименование</th></thead>
                <?php
                for($i=0; $i<count($info); $i++)
                {
                    $id=$info[$i]["subject_id"];
                    $name=$info[$i]["name"];
                    echo "<tr><td>$id</td><td>$name</td></tr>";
                }
                ?>
            </table>
        </div>
    </body>
</html>