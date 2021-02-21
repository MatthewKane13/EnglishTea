<?php
$DBW=new PDO("mysql:host=localhost;dbname=learnenglish", "root", "") or die("error");
try
{
$worker=$DBW->prepare("insert into words(engword, rusword) values('cat','кот')");
// $worker=$DBW->prepare("select * from words");
$worker->execute();
var_dump($worker->fetchAll());
}
catch(Exception $E)
{
    echo $E->getMessage();
}
echo "ok";
?>