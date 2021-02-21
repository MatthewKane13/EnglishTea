<!DOCTYPE html>
<html lang="en" class="w-100 h-100">
<head>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="CSS/autoresation.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="w-100 h-100 d-flex justify-content-center bg-dark">
    <form action="php/login.php" method="POST" class="form-group w-50"> 
    <span class="text-light">Введите логин</span> <br>
    <input type="text" name="login" id="login" placeholder="Введите логин" required class="form-control"> <br>
    <span class="text-light">Введите пароль</span> <br>
    <input type="text" name="password" id="password" placeholder="Введите пароль" required class="form-control"> <br>
    <input type="submit" value="Войти" class="btn btn-success">
    <input type="button" class="btn btn-success" value="Войти как" id="logins">
    </form>
    <script>
    document.querySelector("#logins").value+=" "+$.cookie("login");
    </script>
</body>
</html>