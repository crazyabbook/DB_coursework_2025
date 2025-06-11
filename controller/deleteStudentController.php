<?php
include "../functions.php";
deleteStudentByID($_GET["id"]);
header("Location: ../students.php");
?>