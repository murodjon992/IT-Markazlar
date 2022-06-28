<?
include_once('../db.php');
if (isset($_POST['userTel']) && isset($_POST['userPas'])) {
    
    $userTel = $_POST['userTel'];
    $userPas = $_POST['userPas'];

    
    $sql = "SELECT phone, password  FROM users WHERE phone = '".$userTel."' AND password = '".$userPas."'";
    
    $result = $conn->query($sql);
    $row = $result->num_rows;
    
    if ($row === 1) {
        echo json_encode($row);
        $_SESSION['tel'] = $userTel;
        
    } else if($row === 0){
            $_SESSION['tel'] = $userTel;
            echo json_encode($row);
        }
    } else {
        echo 'xato';
}
// echo json_encode($_POST);