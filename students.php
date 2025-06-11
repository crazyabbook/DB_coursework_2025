<?php
include "functions.php";
$info=getAllStudentsInfo();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="design.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Школьное сообщество - Обучающиеся</title>
    </head>
    <body>
        <nav class="nav"> 
            <ul> 
                <li><a href="main.php">Главная</a></li>
            </ul> 
        </nav>
        <h1>Данные об обучающихся</h1>
        <div>
            <table>
                <thead><th>Код</th><th>ФИО</th><th>Класс</th><th>Дата рождения</th><th>Адрес прописки</th><th>Дата поступления</th><th>Сведения о родителях</th><th>Номер телефона</th></thead>
                <?php 
                $found = false;
                for($i=0; $i<count($info); $i++)
                {
                    $id=$info[$i]["student_id"];
                    $fio=$info[$i]["full_name"];
                    $class=$info[$i]["class"];
                    $birthday=$info[$i]["date_of_birth"];
                    $address=$info[$i]["address"];
                    $date=$info[$i]["enrollment_date"];
                    $parents=$info[$i]["parents_info"];
                    $mobile=$info[$i]["contact_number"];
                    echo "<tr><td>$id</td><td>$fio</td><td>$class</td><td>$birthday</td><td>$address</td><td>$date</td><td>$parents</td><td>$mobile</td><td><a href='updateStudent.php?id=", $id, "'>...</a></td><td><a href='controller/deleteStudentController.php?id=", $id, "'>X</a></td></tr>";
                }
                ?>
            </table>
        </div>
        <button type="submit" name="add"><a href="addStudent.php">Добавить</a></button>
    </body>
</html>