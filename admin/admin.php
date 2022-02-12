<?
if (!isset($_SESSION)) {
    session_start();
  }
  include_once('../db.php'); 
// login verifikatsiya
if (!isset($_SESSION['is_admin_login'])) {  
    if (isset($_POST['checkLogemail']) && isset($_POST['adminLogEmail']) && isset($_POST['adminPass'])) {
        $adminLogEmail = $_POST['adminLogEmail'];
        $adminPass = $_POST['adminPass'];


        $sql = "SELECT admin_email, admin_pass FROM admin WHERE admin_email = '". $adminLogEmail ."' AND admin_pass = '".$adminPass."'";

        $result = $conn->query($sql);
        $row = $result->num_rows;

        if ($row === 1) {
            echo json_encode($row);
            $_SESSION['is_admin_login'] = true;
            $_SESSION['adminLogEmail'] = $adminLogEmail;
        } else if($row === 0){
            echo json_encode($row);
        }
    }
}
?>