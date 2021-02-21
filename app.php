<?php
require "header.php";
require "Word.php";
$DBW=new PDO("mysql:host=localhost;dbname=learnenglish", "root", "") or die("error");
try
{
    // $login=$_COOKIE['login'];
    // var_dump($_COOKIE);
    // echo "<div id=userpanel> $login </div>";
$worker=$DBW->prepare('SELECT * FROM `words` WHERE know = 0 ORDER BY RAND() LIMIT 1');
// $worker=$DBW->prepare("select * from words");
$worker->execute();
$data=$worker->fetchAll();
$word=new Word();
$word->engword=$data[0]["engword"];
$word->transcription=$data[0]["transcription"]; 
$word->rusword=$data[0]["rusword"];
$id=$data[0]['id_word'];
// $quary="UPDATE words SET know = 1 WHERE id_word = $id";
// $worker=$DBW->prepare($quary);
// $worker->execute();
echo '<link rel="stylesheet" href="CSS/style.css">';
echo '<form action="app.php" method="GET">';
echo "<div class=card> <span id=number>$id</span>
<span class=engword>$word->engword</span> <br>
<span class=transcription>$word->transcription</span> <br>
<span class=rusword>$word->rusword</span> <br>
    <input id=btn type='button' value='Следущее слово'>
</form>
</div>";

}
catch(Exception $E)
{
    echo $E->getMessage();
}
?>
<script src="js/app.js">

</script>
<?php
require "footer.php"
?>