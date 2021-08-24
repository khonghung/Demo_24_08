<?php
include "function.php";
$id = $_REQUEST['id'];
deleteUser($id);
echo "<confirm>";
header("location: user-list.php");