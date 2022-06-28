<?
if (!isset($_SESSION)) {
  session_start();
}
include_once('../../db.php'); 


if (isset($_POST['stName']) && isset($_POST['stLastname']) && isset($_POST['jins']) && isset($_POST['phone']) && isset($_POST['manzil']) && isset($_POST['kurs']) && isset($_POST['sana']) && isset($_POST['qabulSana']) && isset($_POST['stPass']) && isset($_POST['selfId']) && isset($_POST['status']) && isset($_POST['durPrice'])) {
    $stName = mysqli_real_escape_string($conn, $_POST['stName']);
    $stSurname = mysqli_real_escape_string($conn,$_POST['stLastname']);
    $jins = $_POST['jins'];
    $phone = $_POST['phone'];
    $manzil = mysqli_real_escape_string($conn,$_POST['manzil']);
    $kurs = mysqli_real_escape_string($conn,$_POST['kurs']);
    $sana = $_POST['sana'];
    $qabulSana = $_POST['qabulSana'];
    $stPass = $_POST['stPass'];
    $selfId = $_POST['selfId'];
    $status = $_POST['status'];
    $durPrice = $_POST['durPrice'];
    
    $_SESSION['tel'] = $phone;

    $sql = "INSERT INTO users (name, surname, gender, birthday, app_date, address, phone, passport, status, dev_type, dur_price, password) VALUES('$stName', '$stSurname', '$jins','$sana', '$qabulSana','$manzil','$phone','$selfId', '$status','$kurs', '$durPrice','$stPass')";
    if ($conn->query($sql) === TRUE) {
        echo json_encode('OK');
    } else {
        echo json_encode('xato');
    }
}

  
?>