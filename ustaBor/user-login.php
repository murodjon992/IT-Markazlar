<?php 
ob_start();
include_once('../db.php');
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if (!empty($phone) && !empty($password)) {
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE phone = '{$phone}' AND password = '{$password}'");
    if (mysqli_num_rows($sql) > 0) {
        mysqli_fetch_assoc($sql);
        $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE phone = {$phone}");
        $row = mysqli_fetch_assoc($sql3);
        $_SESSION['user_id'] = $row['id'];
        setcookie("phone", $row['phone'], time() + 3 * 24 * 60 * 60, "/");
        setcookie("password", $row['password'], time() + 3 * 24 * 60 * 60, "/");
        echo "success";
    } else{
        echo "Parol yoki Telefon raqam noto'g'ri!";
    }
} else {
    echo "Barcha bo'limlar to'ldirilishi shart";
}

ob_end_flush();
?> 