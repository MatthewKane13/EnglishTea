<?php
require "header.php";
require "php/DBWorker.php";
$DBW = new DBWorker("learnenglish", "root", "");
$quary = 'SELECT * FROM `words` WHERE know = 1 LIMIT 1';
$data = $DBW->execute_quary($quary);
$number=$data[0]['id_word'];
$eng=$data[0]['engword'];
$tr=$data[0]['transcription'];
$rus=$data[0]['rusword'];
echo "$number $eng";
// ((SELECT rusword FROM `words` WHERE id_word <> 17 ORDER BY RAND() LIMIT 4)UNION (SELECT rusword FROM `words` WHERE id_word = 17)) ORDER BY RAND()
?>
<?php
require "footer.php";
?>