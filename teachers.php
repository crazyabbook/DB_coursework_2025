<?php
include "functions.php";
$info=getAllTeachersInfo();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="design.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Школьное сообщество - Преподаватели</title>
    </head>
    <body>
        <nav class="nav"> 
                <ul> 
                    <li><a href="main.php">Главная</a></li>
                </ul> 
            </nav>
        <h1>Данные о преподавателях</h1>
        <div>
            <table>
                <thead><th>Код</th><th>ФИО</th><th>Начальная дата работы</th><th>Дата поступления</th></thead>
                <?php
                for($i=0; $i<count($info); $i++)
                {
                    $id=$info[$i]["teacher_id"];
                    $fio=$info[$i]["passport_data"];
                    $date1=$info[$i]["start_date"];
                    $date2=$info[$i]["date_of_employment"];
                    echo "<tr><td>$id</td><td>$fio</td><td>$date1</td><td>$date2</td><td><a href='updateTeacher.php?id=", $id, "'>...</a></td><td><a href='controller/deleteTeacherController.php?id=", $id, "'>X</a></td></tr>";
                }
                ?>
            </table>
        </div>
        <button type="submit" name="add"><a href="addTeacher.php">Добавить</a></button>
    </body>
</html>