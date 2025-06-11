<?php
include "../functions.php";
updateFact($_POST['fact_id'], $_POST['teacher_id'], $_POST['class_id'], $_POST['subject_id'], $_POST['fact_date'], $_POST['fact_hours']);
header("Location: ../fact.php");
?>