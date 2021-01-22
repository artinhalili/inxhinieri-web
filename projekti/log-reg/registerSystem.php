<?php
if(isset($_POST['signup-submit'])){

    require 'dbh.php';

    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['register-password'];
    $passwordRepeat = $_POST['pwd-repeat'];

    if(empty($username) || empty($email) || empty($password) || empty($passwordRepeat)){
        header("Location: ../register.php?error=emptyfields&uid=".$username."&email=".$email);
        exit();
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("Location: ../register.php?error=invalidmailuid");
        exit();
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../register.php?error=invalidmail&uid=".$username);
        exit();
    }
    else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("Location: ../register.php?error=invalidUID&email=".$email);
        exit();
    }
    else if($password !== $passwordRepeat){
        header("Location: ../register.php?error=passwordcheck&uid=".$username."&email=".$email);
        exit();
    }
    else{

    $sql = "SELECT Username FROM register WHERE Username=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../register.php?error=sqlerror");
        exit();
    }else{
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
        if($resultCheck > 0){
            header("Location: ../register.php?error=usertaken&email=".$email);
            exit();
        }else{

            $sql = "INSERT INTO register (Username, Email, Password) VALUES (?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("Location: ../register.php?error=sqlerror");
                exit();
            }else{
                $hashPWD = password_hash($password, PASSWORD_DEFAULT);



                mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashPWD);
                mysqli_stmt_execute($stmt);
                header("Location: ../register.php?signup=succes");
                exit();
            }

        }
    }


    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else{
    header("Location: ../register.php");
     exit();
}