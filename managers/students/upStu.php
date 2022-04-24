<?

include_once('../../db.php');
if (isset($_POST['idUp']) && isset($_POST['ism']) && isset($_POST['fam']) && isset($_POST['tel']) && isset($_POST['manzilU']) && isset($_POST['kursU']) && isset($_POST['sanaT']) && isset($_POST['sanaK']) && isset($_POST['parol']) && isset($_POST['passport']) && isset($_POST['gender'])) {
    $id = $_POST['idUp'];
    $stIsm = mysqli_real_escape_string($conn, $_POST['ism']);
    $stFam = mysqli_real_escape_string($conn,$_POST['fam']);
    $jins = $_POST['gender'];
    $phone = $_POST['tel'];
    $manzil = mysqli_real_escape_string($conn,$_POST['manzilU']);
    $kurs = mysqli_real_escape_string($conn,$_POST['kursU']);
    $sana = $_POST['sanaT'];
    $qabulSana = $_POST['sanaK'];
    $sPass = $_POST['parol'];
    $selfId = $_POST['passport'];

    $sql  = "UPDATE users SET name = '$stIsm', surname = '$stFam',gender = '$jins',birthday = '$sana',app_date = '$qabulSana',address = '$manzil', phone = '$phone',passport = '$selfId',dev_type = '$kurs',password = '$sPass' WHERE id = '$id'";
    if ($conn->query($sql) === TRUE) {
        echo json_encode('OK');
    } else {
        echo json_encode('xato');
    }

} else {
   echo 'katta xato';
}