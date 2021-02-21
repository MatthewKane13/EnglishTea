<?php

require "DBWorker.php";
$DBW = new DBWorker("learnenglish", "root", "");
// $id=$data[0]['id_word'];
$id = $_POST['id'];
// echo "$id";
$quary="UPDATE words SET know = 1 WHERE id_word = $id";
$DBW->execute_quary($quary);
header('Location:../app.php');
?>