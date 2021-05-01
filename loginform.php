<?php
    session_start();

    // $email = !isset($_SESSION['user_email']) ? $_SESSION['user_email'] : "1";

    if(!isset($_SESSION['user_id']) && !isset($_SESSION['user_email'])) {

    

?>


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
            position: absolute;
            top: 50%;
            left: 50%;
            width: 400px;
            padding: 40px;
            transform: translate(-50%, -50%);
            background: rgba(0,0,0,.8);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0,0,0,.6);
            border-radius: 10px;
        }
        .banner form h1{
            text-align: center;
            margin-bottom: 40px;
            color: #fff;

        }
        .banner .user-box{
            position: relative;
        }
        .banner .user-box input{
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
        }
        .banner .user-box label{
            position: absolute;
            top:0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: .5s;
        }
        .banner .user-box input:valid ~ label, .banner .user-box input:focus ~ label {
            top: -20px;
            left: 0;
            color: #fff;
            font-size: 12px;
        }



        
        


        .banner form button {
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            color: #fff;
            font-size: 16px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: .5s;
            margin-top: 40px;
            letter-spacing: 4px
        
        
        }
        button {
            outline: none; /* Для синий ободки */
            border: 0;
            background: transparent;
        }       

        .banner button:hover {
            background: #03e9f4;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px #03e9f4,
                        0 0 25px #03e9f4,
                        0 0 50px #03e9f4,
                        0 0 100px #03e9f4;
        }

        .banner button span {
            position: absolute;
            display: block;
        }

        @keyframes btn-anim1 {
            0%{
                left: -100%;
            }
            50%,100% {
                left: 100%;
            }
        }

        .banner button span:nth-child(1) {
            top: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #03e9f4);
            animation: btn-anim1 2s linear infinite;
        }



        .banner button span:nth-child(2) {
            top: -100%;
            right: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(180deg, transparent, #03e9f4);
            animation: btn-anim2 2s linear infinite;
            animation-delay: .48s
        }

        @keyframes btn-anim2 {
            0% {
                top: -100%;
            }
            50%,100% {
                top: 100%;
            }
        }


        .banner button span:nth-child(3) {
                bottom: 0;
                right: -100%;
                width: 100%;
                height: 2px;
                background: linear-gradient(270deg, transparent, #03e9f4);
                animation: btn-anim3 2s linear infinite;
                animation-delay: 0.96s
                }

                @keyframes btn-anim3 {
                0% {
                    right: -100%;
                }
                50%,100% {
                    right: 100%;
                }
                }

                .banner button span:nth-child(4) {
                bottom: -100%;
                left: 0;
                width: 2px;
                height: 100%;
                background: linear-gradient(360deg, transparent, #03e9f4);
                animation: btn-anim4 2s linear infinite;
                animation-delay: 1.44s
                }

                @keyframes btn-anim4 {
                0% {
                    bottom: -100%;
                }
                50%,100% {
                    bottom: 100%;
                }
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

            <?php  if (isset($_GET['error'])) {  echo $_POST['email'];?>
                   <p class='error'>
                        <?=$_GET['error']?>
                    </p>
            <?php } ?> 

            

            <img src="./img/logo.png" alt="SpaceSoft" width="110px" height="110px"  class="logo">
           
            <div class="user-box">
                <input type="email" name="email" required="">
                <label>Почта</label>
            </div>
           
            <div class="user-box">
                <input type="password" name="password" required="">
                <label>Пароль</label>
            </div>
           
            
            
            
            <button type="submit">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Вход
            </button>
            <br>
        </form>
    </div>
    
</body>
</html>
<?php } else {
    header("Location: index.php");
}?>