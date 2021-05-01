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
            header("Location: loginform.php?error=User Email is required");
            exit();
        } 
        else if(empty($fpasswrd)){
            header("Location: loginform.php?error=User Password is required");
            exit();
        }
        else {
           $sql = $db->prepare("SELECT * FROM emp WHERE email=?");
           $sql->execute([$femail]);

           if($sql->rowCount() === 1) {

           }
           else {
               header("Location: loginform.php?error=Incorrect data");
           }
           
        }
    }
    else {
        header("Location: loginform.php");
        exit();
    }
?>