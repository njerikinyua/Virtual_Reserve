<?php
session_start();

require_once "connection.php";

if(isset($_POST['login']) && $_SERVER['REQUEST_METHOD'] === 'POST'){

        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM `users` WHERE `Email_Address`='$email'";

        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);
            $pass = $row['Password'];

        if(md5($password) == $pass){

        $type = $row['User_Type'];
        $uid = $row['User_ID'];

                if ($type == "Administrator") {
                $_SESSION['adminname'] = $uid;
                header("Location: ../index.php");
                }else if ($type == "Wildlife Expert") {
                $_SESSION['username'] = $uid;   
                header("Location: ../index1.php");
                }else if ($type == "User") {
                $_SESSION['username1'] = $uid;   
                header("Location: ../index2.php");
                }
    }else{
        echo "Passwords do not match, kindly try again.";
    }
    }else{
        echo "User not found, kindly try again.";
    }

}
           
?>