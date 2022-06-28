<?
if (!isset($_SESSION)) {
  session_start();
}
include_once('../db.php'); 


if (isset($_POST['checkemail']) && isset($_POST['usEmail'])) {
    $usEmail = $_POST['usEmail'];
    $sql = "SELECT us_email FROM ustalar WHERE us_email = '".$usEmail."'";
    $result = $conn->query($sql);
    $row = $result->num_rows;
    echo json_encode($row);
}


if (isset($_POST['stuSignUp']) && isset($_POST['stName']) && isset($_POST['stEmail']) && isset($_POST['stPass'])  && isset($_POST['manzilA'])) {
    $usName = mysqli_real_escape_string($conn, $_POST['stName']);
    $usEmail = mysqli_real_escape_string($conn, $_POST['stEmail']);
    $usPass = mysqli_real_escape_string($conn,$_POST['stPass']);
    $manzilA = mysqli_real_escape_string($conn, $_POST['manzilA']);
   
    $_SESSION['usManzil'] = $manzilA;
    $_SESSION['usIsm'] = $usName;

    $sql = "INSERT INTO ustalar(us_name, us_email, us_man, us_pass) VALUES('$usName', '$usEmail', '$manzilA','$usPass')";
    if ($conn->query($sql) === TRUE) {
        echo json_encode('OK');
    } else {
        echo json_encode('xato');
    }
}
// login verifikatsiya
if (!isset($_SESSION['is_login'])) {  
    if (isset($_POST['checkLogemail']) && isset($_POST['usLogEmail']) && isset($_POST['usPass']) && isset($_POST['manzilAd'])) {
        $usLogEmail = $_POST['usLogEmail'];
        $usPass = $_POST['usPass'];
        $manzilAd = mysqli_real_escape_string($conn, $_POST['manzilAd']);

        $sql = "SELECT us_email, us_pass, us_man FROM ustalar WHERE us_email = '". $usLogEmail ."' AND us_pass = '".$usPass."' AND us_man = '".$manzilAd."'";

        $result = $conn->query($sql);
        $row = $result->num_rows;

        if ($row === 1) {
            echo json_encode($row);
            $_SESSION['is_login'] = true;
            $_SESSION['usLogEmail'] = $usLogEmail;
            $_SESSION['usMan'] = $manzilAd;
        } else if($row === 0){
            echo json_encode($row);
        }
    }
}

?>