<?
if (!isset($_SESSION)) {
    session_start();
  }
  include_once('../../db.php'); 
  $data = stripslashes(file_get_contents('php://input'));
  $mydata = json_decode($data, true);
  $id = $mydata['sid'];


  if (!empty($id)) {
      $sql = "DELETE FROM users WHERE id = {$id}";
      if ($conn->query($sql) == true) {
         echo 'O`quvchi muvaffaqyatli o`chirildi';
        } else {
          echo 'Student not deleted';

      }
  }

$userid = $_POST['id'];

$sql = "SELECT * FROM users WHERE id = {$userid}";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
?>
<link rel="stylesheet" href="../css/style.css?v=<?= time()?>">
<h6 style="text-align: center;"><strong class="font-italic text-primary text-uppercase text-shadow"><?= $row['name']?> </strong> haqida malumot</h6>
<table width='100%'>
  <tr>
    <td width="300px">
      <ul class="infoList">
        <li>Ismi: <span> <?= $row['name']?></span></li>
        <li>Familiyasi: <span> <?= $row['surname']?></span></li>
        <li>Jinsi: <span><?= $row['gender']?></span></li>
        <li>Tug'ilgan sanasi: <span><?= $row['birthday']?></span></li>
        <li>Markazga kelgan sana: <span><?= $row['app_date']?></span></li>
        <li>Manzil: <span> <?= $row['address']?></span></li>
        <li>Telefon: <span> <?= $row['phone']?></span></li>
        <li>PAssport(MEtrka): <span> <?= $row['passport']?></span></li>
        <li>Kursi: <span> <?= $row['dev_type']?></span></li>
      </ul>
      
    </td>
  </tr>
</table>
<?
}
?>