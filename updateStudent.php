<?php
include "functions.php";
$students=getStudentByID($_GET['id']);
$classes=getAllClassesInfo();
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
            <form action="controller\updateStudentController.php" method="POST" role='form'>
                <div>
                    <input id="student_id" type="hidden" name="student_id" value="<?php echo $students['student_id'];?>"/>
                    <div>
                        <label for="class_id">Код класса</label>
                        <div>
                            <select id="class_id" name="class_id">
                                <?php
                                    for($i=0;$i<count($classes);$i++)
                                    {
                                        $class_id=$classes[$i]['class_id'];
                                        $letter=$classes[$i]['letter'];
                                        $number=$classes[$i]['number'];
                                        if($class_id==$students['class_id'])
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
                        <label for="full_name">ФИО</label>
                        <div>
                            <input id="full_name" type="text" name="full_name" value="<?php echo $students['full_name'];?>"/>
                        </div>
                    </div>
                    <div>
                        <label for="date_of_birth">Дата рождения</label>
                        <div>
                            <input id="date_of_birth" type="date" name="date_of_birth" value="<?php echo $students['date_of_birth'];?>"/>
                        </div>
                    </div>
                    <div>
                        <label for="address">Адрес прописки</label>
                        <div>
                            <input id="address" type="text" name="address" value="<?php echo $students['address'];?>"/>
                        </div>
                    </div>
                    <div>
                        <label for="enrollment_date">Дата поступления</label>
                        <div>
                            <input id="enrollment_date" type="date" name="enrollment_date" value="<?php echo $students['enrollment_date'];?>"/>
                        </div>
                    </div>
                    <div>
                        <label for="parents_info">Сведения о родителях</label>
                        <div>
                            <input id="parents_info" type="text" name="parents_info" value="<?php echo $students['parents_info'];?>"/>
                        </div>
                    </div>
                    <div>
                        <label for="contact_number">Номер телефона</label>
                        <div>
                            <input id="contact_number" type="text" name="contact_number" value="<?php echo $students['contact_number'];?>"/>
                        </div>
                    </div>
                    <button type="submit" name="add">Обновить</button>
                </div>
            </form>
        </div>
    </body>
</html>