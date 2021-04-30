<?php

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
            // header("Location: loginform.php?error=User Name is required");
            // exit();
        } 
        else if(empty($fpasswrd)){
            // header("Location: loginform.php?error=User Password is required");
            // exit();
        }
        else {
            $sql = "SELECT * FROM emp WHERE email='$femail' AND password='$fpassword'";
            $res = mysql_query($sql);

            if(mysql_fetch_array($res)){
                echo "<h1>dddd</h1>";
            }

        }
    }
    else {
        header("Location: loginform.php");
        exit();
    }
?>