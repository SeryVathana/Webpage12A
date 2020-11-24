<?php 

    include_once 'dbh.inc.php';
    //add mysqli_real_escape_string($connect, ) to protect the info
    $F_name = mysqli_real_escape_string($connect, $_POST['F_name']);
    $L_name = mysqli_real_escape_string($connect, $_POST['L_name']);
    $Email = mysqli_real_escape_string($connect, $_POST['email']);
    $Password = mysqli_real_escape_string($connect, $_POST['password']);

    $sql = "INSERT INTO myusers (user_first, user_last, user_email, user_password)
            VALUE (?,?,?,?);";

    $stmt = mysqli_stmt_init($connect);
    if(!mysqli_stmt_prepare($stmt, $sql)){
            echo "SQL error";
    } else {
            mysqli_stmt_bind_param($stmt, "ssss", $F_name, $L_name, $Email, $Password);
            mysqli_stmt_execute($stmt);
    }
    header("LOCATION: ../index.php?signup=success");