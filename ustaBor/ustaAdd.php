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


if (isset($_POST['stuSignUp']) && isset($_POST['stName']) && isset($_POST['stEmail']) && isset($_POST['stPass'])) {
    $usName = $_POST['stName'];
    $usEmail = $_POST['stEmail'];
    $usPass = $_POST['stPass'];



    $sql = "INSERT INTO ustalar(us_name, us_email, us_pass) VALUES('$usName', '$usEmail', '$usPass')";
    if ($conn->query($sql) === TRUE) {
        echo json_encode('OK');
    } else {
        echo json_encode('xato');
    }
}
// login verifikatsiya
if (!isset($_SESSION['is_login'])) {  
    if (isset($_POST['checkLogemail']) && isset($_POST['usLogEmail']) && isset($_POST['usPass'])) {
        $usLogEmail = $_POST['usLogEmail'];
        $usPass = $_POST['usPass'];


        $sql = "SELECT us_email, us_pass FROM ustalar WHERE us_email = '". $usLogEmail ."' AND us_pass = '".$usPass."'";

        $result = $conn->query($sql);
        $row = $result->num_rows;

        if ($row === 1) {
            echo json_encode($row);
            $_SESSION['is_login'] = true;
            $_SESSION['usLogEmail'] = $usLogEmail;
        } else if($row === 0){
            echo json_encode($row);
        }
    }
}

?>