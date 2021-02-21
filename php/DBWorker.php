<?php 
class DBWorker
{
public $dbname;
public $host="localhost";
public $login;
public $password;
public $dbw;
function __construct($dbname, $login, $password)
{
    $this->dbw=new PDO("mysql:host=localhost;dbname=$dbname", "$login", "$password") or die("error");
}
function execute_quary($quary) {
$worker=$this->dbw->prepare($quary);
$worker->execute();
$data=$worker->fetchAll();
return $data;
}
} 


?>