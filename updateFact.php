<?php
include "functions.php";
$fact=getFactByID($_GET['id']);
$classes=getAllClassesInfo();
$teachers=getAllTeachersInfo();
$subjects=getAllSubjectsInfo();
?>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="design.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Редактирование</title>
    </head>
    <body>
        <div>
            <form action="controller\updateFactController.php" method="POST" role='form'>
                <div>
                    <input id="fact_id" type="hidden" name="fact_id" value="<?php echo $fact['fact_id'];?>"/>
                    <div>
                        <label for="teacher_id">Преподаватель</label>
                        <div>
                            <select id="teacher_id" name="teacher_id">
                                <?php
                                    for($i=0;$i<count($teachers);$i++)
                                    {
                                        $teacher_id=$teachers[$i]['teacher_id'];
                                        $passport_data=$teachers[$i]['passport_data'];
                                        if($teacher_id==$fact['teacher_id'])
                                        {
                                            echo "<option selected value='$teacher_id'>$passport_data</option>";
                                        }
                                        else
                                        {
                                            echo "<option value='$teacher_id'>$passport_data</option>";
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label for="class_id"> Класс</label>
                        <div>
                            <select id="class_id" name="class_id">
                                <?php
                                    for($i=0;$i<count($classes);$i++)
                                    {
                                        $class_id=$classes[$i]['class_id'];
                                        $letter=$classes[$i]['letter'];
                                        $number=$classes[$i]['number'];
                                        if($class_id==$fact['class_id'])
                                        {
                                            echo "<option selected value='$class_id'>$number$letter</option>";
                                        }
                                        else
                                        {
                                            echo "<option value='$class_id'>$number$letter</option>";
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label for="subject_id">Предмет</label>
                        <div>
                            <select id="subject_id" name="subject_id">
                                <?php
                                    for($i=0;$i<count($subjects);$i++)
                                    {
                                        $subject_id=$subjects[$i]['subject_id'];
                                        $name=$subjects[$i]['name'];
                                        if($subject_id==$fact['subject_id'])
                                        {
                                            echo "<option selected value='$subject_id'>$name</option>";
                                        }
                                        else
                                        {
                                            echo "<option value='$subject_id'>$name</option>";
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label for="fact_date">Дата</label>
                        <div>
                            <input id="fact_date" type="date" name="fact_date" value="<?php echo $fact['fact_date'];?>"/>
                        </div>
                    </div>
                    <div>
                        <label for="fact_hours">Количество часов</label>
                        <div>
                            <input id="fact_hours" type="int" name="fact_hours" value="<?php echo $fact['fact_hours'];?>"/>
                        </div>
                    </div>
                    <button type="submit" name="add">Обновить</button>
                </div>
            </form>
        </div>
    </body>
</html>