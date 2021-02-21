<?php
// $text=file_get_contents('../autoresation.php');
// echo $text;
require "DBWorker.php";
$DB=new DBWorker("learnenglish","root","");
$login=$_POST["login"];
$password=$_POST["password"];
$quary="SELECT * FROM `users` WHERE login='$login' and password='$password'";
// echo $quary; 
$data=$DB->execute_quary($quary);
if(count($data)){
    echo "Вы успешно вошли в систему";
    // $_COOKIE["login"]=$login;
    setcookie("login","$login",time()+60*60*24*30);
    setcookie("pass","$password",time()+60*60*24*30);
header("Location:../app.php");
}
else {
header('Location: ../autoresation.php');
exit();
}
// var_dump ($data);


?>