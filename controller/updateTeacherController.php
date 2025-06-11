<?php
include "../functions.php";
updateTeacher($_POST['teacher_id'], $_POST['passport_data'], $_POST['start_date'], $_POST['date_of_employment']);
header("Location: ../teachers.php");
?>