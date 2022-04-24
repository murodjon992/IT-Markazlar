<?
include_once('../../db.php'); 

$data = stripslashes(file_get_contents('php://input'));
$myData = json_decode($data, true);
$id = $myData['uid'];
$name = $myData['name'];


$sql1 = "SELECT * FROM users WHERE id={$id}";
$result = $conn->query($sql1);
$row = $result->fetch_assoc();


echo json_encode($row);



