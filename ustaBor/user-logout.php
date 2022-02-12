<?php
    include_once('../db.php');
    $user_id = $_SESSION['user_id'];
    $logout_id = mysqli_real_escape_string($conn, $_GET['id']);
    if (isset($user_id)) {
        if (isset($logout_id)) {
            session_unset();
            session_destroy();
            setcookie("phone", '', time() - 30, "/");
            setcookie("password", '', time() - 30, "/");
            header("Location: ../");
        } else{
            header("Location: ../");
        }
    } else{
        header("Location: ../");
    }
?>