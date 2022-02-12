<?php
include_once('db.php');
$id = mysqli_real_escape_string($conn, $_POST['id']);

if (!empty($id)) {
    $query = mysqli_query($conn, "DELETE FROM `users` WHERE id = {$id}");
    if ($query) {
        echo "success";
    } else {
        echo "O'chirib bo'lmadi";
    }
}
?>