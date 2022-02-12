<?php

ob_start();
include_once('db.php');
$name = addslashes(mysqli_real_escape_string($conn, $_POST['name']));
$surname = addslashes(mysqli_real_escape_string($conn, $_POST['surname']));
$gender = addslashes(mysqli_real_escape_string($conn, $_POST['gender']));
$birthday = addslashes(mysqli_real_escape_string($conn, $_POST['birthday']));
$app_date = addslashes(mysqli_real_escape_string($conn, $_POST['app_date']));
$address = addslashes(mysqli_real_escape_string($conn, $_POST['address']));
$phone = addslashes(mysqli_real_escape_string($conn, $_POST['phone']));
$passport = addslashes(mysqli_real_escape_string($conn, $_POST['passport']));
$dev_type = addslashes(mysqli_real_escape_string($conn, $_POST['dev_type']));
$password = addslashes(mysqli_real_escape_string($conn, $_POST['password']));

if (!empty($name) && !empty($surname) && !empty($gender) && !empty($birthday) && !empty($app_date) && !empty($address) && !empty($phone) && !empty($passport) && !empty($dev_type) && !empty($password)) {
    
    $sql = mysqli_query($conn, "SELECT passport FROM users WHERE passport = '{$passport}'");
    if (mysqli_num_rows($sql) > 0) {
        echo "$passport - Bu Passport allaqachon Ro'yxatdan o'tgan";
    } else{
        $sql2 = "INSERT INTO users (name, surname, gender, birthday, app_date, address, phone, passport, dev_type, password) VALUES ('{$name}', '{$surname}', '{$gender}', '{$birthday}', '{$app_date}', '{$address}', '{$phone}', '{$passport}', '{$dev_type}', '{$password}')";
        $query2 = mysqli_query($conn, $sql2);
        if ($query2) {
            echo 'success';
        } else {
            echo "Nimadir xato ketdi";
        }
    }
} else {
    echo "Barcha bo'limlar to'ldirilishi shart";
}
ob_end_flush();
?>