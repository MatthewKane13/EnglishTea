<?php
$DBW=new PDO("mysql:host=localhost;dbname=learnenglish", "root", "") or die("error");
$FR=fopen("dictionary.txt", "r");
while(!feof($FR)) 
{
    // get line from file
$line=fgets($FR);
$newword=new Word();
$parts=explode("—",$line);
$newword->rusword=$parts[1];
$engtr=$parts[0];
$newword->engword=explode("[",$engtr)[0];
$newword->transcription="[".explode("[",$engtr)[1];
try
{
$worker=$DBW->prepare("insert into words(engword, rusword, transcription) values('$newword->engword','$newword->transcription','$newword->rusword')");
// $worker=$DBW->prepare("select * from words");
$worker->execute();
var_dump($worker->fetchAll());
}
catch(Exception $E)
{
    echo $E->getMessage();
}
// var_dump($newword);
echo $newword->transcription."<br>";
}
fclose($FR);
class Word
{
public $engword;
public $rusword;
public $transcription;
}
?>