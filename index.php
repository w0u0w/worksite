<?php
    session_start();

    if(isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) {

    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link rel="stylesheet" href="style.css">

    <style>
        .navbar{
    width: 95%;
    margin: auto;
    padding: 35px auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: rgba(0,0,0,.7);
    height: 10vh;
    width: 100%;
    position: fixed;
}
    </style>
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <img src="./img/logo.png" alt="SpaceSoft" width="90px" height="90px" class="logo">
            <ul>
                <li><a href="#">Главная</a></li>
                <li><a href="#">Новости</a></li>
                <li><a href="#">Задачи</a></li>
                <li><a href="#">Табель УРВ</a></li>
                <li><a href="#">Справочник</a></li>
                <li><a href="#">Личный кабинет</a></li>
                <li><a href="logout.php">Выход</a></li>
            </ul>
        </div>
        <div class="content">            
            <p class="header">
                <script>
                    var hour = new Date().getHours();
                    var greeting;
                    if (hour >= 5 && hour < 12)
                        greeting = "Доброе утро,";
                    else if (hour >= 12 && hour < 18)
                        greeting = "Добрый день,";
                    else if (hour >= 18 && hour < 24)
                        greeting = "Добрый вечер,";
                    else if (hour >= 0 && hour < 5)
                        greeting = "Доброй ночи,";
                    document.write(greeting);
                </script>
                <?=$_SESSION['user_firstname']?>
            </p>

        </div>
    </div>
</body>
</html>

<?php } else {
    header("Location: loginform.php");
}?>