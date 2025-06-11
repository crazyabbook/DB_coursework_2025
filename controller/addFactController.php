<?php
include "../functions.php";
addFact($_POST['teacher'], $_POST['class'], $_POST['subject'], $_POST['fact_date'], $_POST['fact_hours']);
header("Location: ../fact.php");
?>