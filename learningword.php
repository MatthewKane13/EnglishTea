<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="CSS/autoresation.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require "php/DBWorker.php";
    $DBW = new DBWorker("learnenglish", "root", "");
    $quary = 'SELECT * FROM `words` WHERE know = 1';
    $data = $DBW->execute_quary($quary);
    echo "    <table class='table table-borderless table-dark'>
    <tr>
    <th scope='col'>Номер слова</th>
    <th scope='col'>Английский</th>
    <th scope='col'>Транскрипция</th>
    <th scope='col'>Перевод</th>
    </tr>  <tbody>";
    foreach($data as $item)
    {
        $number=$item['id_word'];
        $eng=$item['engword'];
        $tr=$item['transcription'];
        $rus=$item['rusword'];
      echo"  <tr>
        <th scope='row'>$number</th>
        <td>$eng</td>
        <td>$tr</td>
        <td>$rus</td>
      </tr>";
    }
    echo "</tbody> </table>";
    // var_dump($data);

    ?>
</body>

</html>