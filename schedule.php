<?php
include "functions.php";
$info=getAllScheduleInfo();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="design.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Образовательное учреждение - Расписание</title>
    </head>
    <body>
        <nav class="nav"> 
            <ul> 
                <li><a href="main.php">Главная</a></li>
                <li><a href="subjects.php">Учебные дисциплины</a></li> 
            </ul> 
        </nav>
        <h1>Расписание</h1>
        <section>
            <div>
                <table>
                    <thead><th>Код</th><th>Код записи плана</th><th>Неделя</th><th>День</th><th>Время начала</th><th>Время окончания</th><th>Кабинет</th></thead>
                    <?php
                        for($i=0; $i<count($info); $i++)
                        {
                            $id=$info[$i]["schedule_id"];
                            $plan=$info[$i]["plan_id"];
                            $week=$info[$i]["week"];
                            $day=$info[$i]["day"];
                            $start_time=$info[$i]["start_time"];
                            $end_time=$info[$i]["end_time"];
                            $room=$info[$i]["room"];
                            echo "<tr><td>$id</td><td>$plan</td><td>$week</td><td>$day</td><td>$start_time</td><td>$end_time</td><td>$room</td></tr>";
                        }
                    ?>
                </table>
            </div>
        </section>
    </body>
</html>