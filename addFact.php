<?php
include "functions.php";
$classes=getAllClassesInfo();
$teachers=getAllTeachersInfo();
$subjects=getAllSubjectsInfo();
?>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="design.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Добавление записи фактической нагрузки</title>
    </head>
    <body>
        <div>
            <form action="controller\addFactController.php" method="POST" role='form'>
                <div>
                    <div>
                        <label for="teacher">Преподаватель</label>
                        <div>
                            <select id="teacher" name="teacher">
                                <?php
                                for($i=0; $i<count($teachers); $i++)
                                {
                                    $teacher_id=$teachers[$i]['teacher_id'];
                                    $passport_data=$teachers[$i]['passport_data'];
                                    echo '<option value="'.$teacher_id.'">'.$passport_data.'</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label for="class">Класс</label>
                        <div>
                            <select id="class" name="class">
                                <?php
                                for($i=0; $i<count($classes); $i++)
                                {
                                    $class_id=$classes[$i]['class_id'];
                                    $letter=$classes[$i]['letter'];
                                    $number=$classes[$i]['number'];
                                    echo '<option value="'.$class_id.'">'.$number.$letter.'</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label for="subject">Предмет</label>
                        <div>
                            <select id="subject" name="subject">
                                <?php
                                for($i=0; $i<count($subjects); $i++)
                                {
                                    $subject_id=$subjects[$i]['subject_id'];
                                    $name=$subjects[$i]['name'];
                                    echo '<option value="'.$subject_id.'">'.$name.'</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label for="fact_date">Дата</label>
                        <div>
                            <input id="fact_date" type="date" name="fact_date"/>
                        </div>
                    </div>
                    <div>
                        <label for="fact_hours">Количество часов</label>
                        <div>
                            <input id="fact_hours" type="int" name="fact_hours"/>
                        </div>
                    </div>
                    <button type="submit" name="add">Добавить</button>
                </div>
            </form>
        </div>
    </body>
</html>