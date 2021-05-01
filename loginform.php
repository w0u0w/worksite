<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            box-sizing: border-box;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .banner{
            width: 100%;
            height: 100vh;
            background-image: url(./img/mainbg.jpg);
            background-size: cover;
            background-position: center;   
        }
        
        .banner form{
            align-items: center;
            margin: 100px auto;
            width: 500px;
            padding: 30px 65px;
            background: rgba(12, 2, 48, 0.9);
            border-radius: 15px;
        }
        .banner form h1{
            text-align: center;
            margin-bottom: 40px;
            color: #fff;

        }
        .banner form label{
            align-items: center;
            margin-bottom: 40px;
            color: #fff;

        }
        input {
            display: block;
            border: 2px solid #ccc;
            width: 95%;
            padding: 10px;
            margin: 10px auto;
            border-radius: 5px;
            background-color: #ccc;
        }
        label {
            font-size: 18px;
            padding: 10px;

        }

        button {
            float: right;
            background: #555;
            padding: 5px 15px;
            color: #ccc;
            border-radius: 5px;
            margin-right: 5px;
            cursor: pointer;
            border: none;
        }
        button:hover{
            opacity: 0.8;
        }
        .logo{
            margin: 10px auto;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .error {
            background : #f2dede;
            color: #a94442;
            padding: 10px;
            border-radius: 5px;
            width: 95%;
            margin: 20px auto;
        }
        
    </style>
</head>
<body>
    <div class="banner">
        <form action="login.php" method="POST">
            <h1>Вход на сайт</h1>

            <!-- <?php  if ($_GET['error']) { 
                   echo  "<div class='error'>";
                   echo $_GET['error'];
                    echo "</div>";  
                    
                        
                    }?> -->

            <img src="./img/logo.png" alt="SpaceSoft" width="110px" height="110px"  class="logo">
            <br>
            <label>Почта</label>
            <input type="email" name="email" placeholder="Почта">
            <br>
            <label>Пароль</label>
            <input type="password" name="password" placeholder="Пароль">
            <br>
            <button type="submit">Войти</button>
            <br>
        </form>
    </div>
    
</body>
</html>