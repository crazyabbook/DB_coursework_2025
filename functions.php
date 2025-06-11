<?php
$link=false;
// ОТКРЫТИЕ СОЕДИНЕНИЯ.
function openDB()
{
    global $link;
    $link=mysqli_connect("localhost", "root", "", "data_base");
    mysqli_query($link, "SET NAMES UTF8");
}
// ЗАКРЫТИЕ СОЕДИНЕНИЯ.
function closeDB()
{
    global $link;
    mysqli_close($link);
}
// ЧТЕНИЕ ВСЕЙ ТАБЛИЦЫ "УЧЕНИКИ".
function getAllStudentsInfo()
{
    global $link;
    openDB();
    $res=mysqli_query($link, "SELECT s.student_id, s.full_name, CONCAT(c.`number`, c.letter) AS class, s.date_of_birth, s.address, s.enrollment_date, s.parents_info, s.contact_number FROM students s JOIN classes c ON s.class_id=c.master_id");
    closeDB();
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}
// ЧТЕНИЕ ОДНОЙ ЗАПИСИ ТАБЛИЦЫ "УЧЕНИКИ".
function getOneStudentInfo()
{
    global $link;
    openDB();
    $res=mysqli_query($link, "SELECT * FROM students WHERE student_id=1");
    closeDB();
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}
// ПОЛУЧЕНИЕ СПИСКА КЛАССОВ.
function getAllClassesInfo()
{
    global $link;
    openDB();
    $res=mysqli_query($link, "SELECT c.class_id, c.master_id, t.passport_data, c.`number`, c.letter FROM classes c JOIN teachers t ON c.master_id=t.teacher_id");
    closeDB();
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}
// ДОБАВЛЕНИЕ УЧЕНИКА.
function addStudent($class, $fio, $birthday, $address, $date, $parents, $mobile)
{
    global $link;
    openDB();
    $res=mysqli_query($link, "INSERT into students (class_id, full_name, date_of_birth, address, enrollment_date, parents_info, contact_number) value ($class, '$fio', '$birthday', '$address', '$date', '$parents', '$mobile')");
    closeDB();
    return $res;
}
// ПОЛУЧЕНИЕ ДАННЫХ ОБ УЧЕНИКЕ.
function getStudentByID($id)
{
    global $link;
    openDB();
    $res=mysqli_query($link, "SELECT * FROM students WHERE student_id=$id");
    closeDB();
    return mysqli_fetch_assoc($res);
}
// ОБНОВЛЕНИЕ ДАННЫХ ОБ УЧЕНИКЕ.
function updateStudent($student_id, $class_id, $full_name, $date_of_birth, $address, $enrollment_date, $parents_info, $contact_number)
{
    global $link;
    openDB();
    $res=mysqli_query($link, "UPDATE students SET class_id=$class_id, full_name='$full_name', date_of_birth='$date_of_birth', address='$address', enrollment_date='$enrollment_date', parents_info='$parents_info', contact_number='$contact_number' WHERE student_id=$student_id");
    closeDB();
    return $res;
}
// УДАЛЕНИЕ ДАННЫХ О СТУДЕНТЕ.
function deleteStudentByID($id)
{
    global $link;
    openDB();
    $res=mysqli_query($link, "DELETE FROM students WHERE student_id=$id");
    closeDB();
    return $res;
}
// ЧТЕНИЕ ВСЕЙ ТАБЛИЦЫ "ПРЕПОДАВАТЕЛИ".
function getAllTeachersInfo()
{
    global $link;
    openDB();
    $res=mysqli_query($link, "SELECT * FROM teachers");
    closeDB();
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}
// ЧТЕНИЕ ОДНОЙ ЗАПИСИ ТАБЛИЦЫ "ПРЕПОДАВАТЕЛИ".
function getOneTeacherInfo()
{
    global $link;
    openDB();
    $res=mysqli_query($link, "SELECT * FROM teachers WHERE teacher_id=1");
    closeDB();
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}
// ДОБАВЛЕНИЕ ПРЕПОДАВАТЕЛЯ.
function addTeacher($passport_data, $start_date, $date_of_employment)
{
    global $link;
    openDB();
    $res=mysqli_query($link, "INSERT into teachers (passport_data, start_date, date_of_employment) value ('$passport_data', '$start_date', '$date_of_employment')");
    closeDB();
    return $result;
}
// ПОЛУЧЕНИЕ ДАННЫХ О ПРЕПОДАВАТЕЛЕ.
function getTeacherByID($id)
{
    global $link;
    openDB();
    $res=mysqli_query($link, "SELECT * FROM teachers WHERE teacher_id=$id");
    closeDB();
    return mysqli_fetch_assoc($res);
}
// ОБНОВЛЕНИЕ ДАННЫХ О ПРЕПОДАВАТЕЛЕ.
function updateTeacher($teacher_id, $passport_data, $start_date, $date_of_employment)
{
    global $link;
    openDB();
    $res=mysqli_query($link, "UPDATE teachers SET passport_data='$passport_data', start_date='$start_date', date_of_employment='$date_of_employment' WHERE teacher_id=$teacher_id");
    closeDB();
    return $res;
}
// УДАЛЕНИЕ ДАННЫХ О ПРЕПОДАВАТЕЛЕ.
function deleteTeacherByID($id)
{
    global $link;
    openDB();
    $res=mysqli_query($link, "DELETE FROM teachers WHERE teacher_id=$id");
    closeDB();
    return $res;
}
// ЧТЕНИЕ ВСЕЙ ТАБЛИЦЫ "ФАКТИЧЕСКАЯ НАГРУЗКА".
function getAllFactInfo()
{
    global $link;
    openDB();
    $res=mysqli_query($link, "SELECT f.fact_id, t.teacher_id, t.passport_data, c.class_id, CONCAT(c.`number`, c.letter) AS class, s.subject_id, s.`name`, f.fact_date, f.fact_hours FROM fact f JOIN teachers t ON f.teacher_id=t.teacher_id JOIN classes c ON f.class_id=c.class_id JOIN subjects s ON f.subject_id=s.subject_id ORDER BY f.fact_id");
    closeDB();
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}
// ЧТЕНИЕ ОДНОЙ ЗАПИСИ ТАБЛИЦЫ "ФАКТИЧЕСКАЯ НАГРУЗКА".
function getOneFactInfo()
{
    global $link;
    openDB();
    $res=mysqli_query($link, "SELECT * FROM fact WHERE fact_id=1");
    closeDB();
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}
// ПОЛУЧЕНИЕ СПИСКА ДИСЦИПЛИН.
function getAllSubjectsInfo()
{
    global $link;
    openDB();
    $res=mysqli_query($link, "SELECT * FROM subjects");
    closeDB();
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}
// ДОБАВЛЕНИЕ СТРОКИ ФАКТИЧЕСКОЙ НАГРУЗКИ.
function addFact($teacher, $class, $subject, $date, $time)
{
    global $link;
    openDB();
    $res=mysqli_query($link, "INSERT into fact (teacher_id, class_id, subject_id, fact_date, fact_hours) value ($teacher, $class, $subject, '$date', $time)");
    closeDB();
    return $res;
}
// ПОЛУЧЕНИЕ ДАННЫХ О ЗАПИСИ ФАКТИЧЕСКОЙ НАГРУЗКИ.
function getFactByID($id)
{
    global $link;
    openDB();
    $res=mysqli_query($link, "SELECT * FROM fact WHERE fact_id=$id");
    closeDB();
    return mysqli_fetch_assoc($res);
}
// ОБНОВЛЕНИЕ ДАННЫХ О ФАКТИЧЕСКОЙ НАГРУЗКЕ.
function updateFact($fact_id, $teacher_id, $class_id, $subject_id, $fact_date, $fact_hours)
{
    global $link;
    openDB();
    $res=mysqli_query($link, "UPDATE fact SET teacher_id=$teacher_id, class_id=$class_id, subject_id=$subject_id, fact_date='$fact_date', fact_hours=$fact_hours WHERE fact_id=$fact_id");
    closeDB();
    return $res;
}
// УДАЛЕНИЕ ДАННЫХ О ФАКТИЧЕСКОЙ НАГРУЗКЕ.
function deleteFactByID($id)
{
    global $link;
    openDB();
    $res=mysqli_query($link, "DELETE FROM fact WHERE fact_id=$id");
    closeDB();
    return $res;
}
// ПОЛУЧЕНИЕ СПИСКА ПЛАНОВОЙ НАГРУЗКИ.
function getAllPlanInfo()
{
    global $link;
    openDB();
    $res=mysqli_query($link, "SELECT p.plan_id, t.passport_data, CONCAT(c.`number`, c.letter) AS class, s.`name`, p.plan_hours FROM plan p JOIN teachers t ON p.teacher_id=t.teacher_id JOIN classes c ON p.class_id=c.class_id JOIN subjects s ON p.subject_id=s.subject_id");
    closeDB();
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}
// ПОЛУЧЕНИЕ СПИСКА РАСПИСАНИЯ.
function getAllScheduleInfo()
{
    global $link;
    openDB();
    $res=mysqli_query($link, "SELECT * FROM schedule");
    closeDB();
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}
?>