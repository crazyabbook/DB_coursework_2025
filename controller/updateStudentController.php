<?php
include "../functions.php";
updateStudent($_POST['student_id'], $_POST['class_id'], $_POST['full_name'], $_POST['date_of_birth'], $_POST['address'], $_POST['enrollment_date'], $_POST['parents_info'], $_POST['contact_number']);
header("Location: ../students.php");
?>