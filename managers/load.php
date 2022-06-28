<?
include('../db.php');

// $query =  "SELECT * FROM events ORDER BY id";
// $result = $conn->query($query);
// $calendar = [];
// while ($rows = mysqli_fetch_assoc($result)) {
//     $id = $rows['id'];
//     $title = $rows['title'];
//     $start = $rows['start_date'];
//     $end = $rows['end_date'];
//     var_dump($start, $id, $end, $title);
// }

if (isset($_POST['title'])) {
    var_dump($_POST);
    $title = $_POST['title'];

    $start = $_POST['start'];
    $end = $_POST['end'];
    $sql = "INSERT INTO events (title, start_date, end_date) VALUES ('$title', '$start', '$end')";
    $conn->query($sql);
}


?>