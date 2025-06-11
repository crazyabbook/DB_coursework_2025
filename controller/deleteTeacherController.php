<?php
include "../functions.php";
deleteTeacherByID($_GET["id"]);
header("Location: ../teachers.php");
?>