<?php

session_start();
include "db_connect.php";
    if(isset($_POST['email']) && isset($_POST['password'])) {
        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $femail = validate($_POST['email']);
        $fpasswrd = validate($_POST['password']);

        if (empty($femail)) {
            header("Location: loginform.php?error=Вы не ввели почту");
            exit();
        } 
        else if(empty($fpasswrd)){
            header("Location: loginform.php?error=Вы не ввели пароль");
            exit();
        }
        else {
            $stmt = $conn->prepare("SELECT * FROM emp WHERE email=?");
            $stmt->execute([$femail]);

            if($stmt->rowCount() === 1) {
                $user = $stmt->fetch();
                $user_id = $user['id'];
                $user_email = $user['email'];
                $user_password = $user['password'];
                $user_firstname = $user['firstname'];


                if($femail === $user_email) {
                    if(password_verify($fpasswrd, $user_password)) {
                        $_SESSION['user_id'] = $user_id;
                        $_SESSION['user_email'] = $user_email;
                        $_SESSION['user_firstname'] = $user_firstname;

                        header("Location: index.php");
                    }
                    else {
                        
                        header("Location: loginform.php?error=Неверно указана почта или пароль");
                    }
                }
                else {
                    header("Location: loginform.php?error=Неверно указана почта или пароль");
                }
            }
            else {
                header("Location: loginform.php?error=Неверно указана почта или пароль");
            }
        }
    }
    else {
        header("Location: loginform.php");
        exit();
        
    }
?>