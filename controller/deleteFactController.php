<?php
include "../functions.php";
deleteFactByID($_GET["id"]);
header("Location: ../fact.php");
?>