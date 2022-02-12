<?
include('../admin/pages/aside.php');
?>
<div class="page-content-wrapper">
            <div class="page-content">
                <div class="top-bar d-flex align-items-center">
                    <div class="d-flex justify-content-center align-items-center w-100">
                        <button class="toggler btn btn-dark"><i class="fas fa-bars"></i></button>
                    </div>
                </div>
               <div class="col-sm-12 mt-5">
                   <p class="bg-dark text-center text-white p-3">Biz bilan ishlovchi Ustalar</p>
                   <?
                   include_once('../db.php');
                   $sql = "SELECT * FROM ustalar";
                   $result = $conn->query($sql);
                   if ($result->num_rows > 0) {?>
                    <table class="table table-striped table-bordered table-light">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">USTA ID</th>
                                <th scope="col">USTA ISMI</th>
                                <th scope="col">USTA Logini</th>
                                <th scope="col">USTA Paroli</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?while($row = $result->fetch_assoc()){?>
                            <tr>
                                <th scope="row"><?= $row['us_id']?></th>
                                <td><?= $row['us_name']?></td>
                                <td><?= $row['us_email']?></td>
                                <td><?= $row['us_pass']?></td>
                                <td>
                                    <form class="d-inline" action="./editUs.php" method="post">
                                    <input type="hidden" name="id" value="<?= $row['us_id'];?>">
                                        <button type="submit" class="btn btn-success mr-3" name="edit"><i class="far fa-edit"></i></button>
                                    </form>
                                    
                                    <form action="" method="POST" class="d-inline">
                                        <input type="hidden" name="id" value="<?= $row['us_id'];?>">
                                        <button type="submit" class="btn btn-danger mr-3" name="delete"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                    </td>
                            </tr>
                            <?}?>
                        </tbody>
                    </table>
                    <?} else {
                            echo '0 natija';
                        }
                        
                        if (isset($_REQUEST['delete'])) {
                            $sql = "DELETE FROM ustalar WHERE us_id = {$_REQUEST['id']}";
                            if ($conn->query($sql) == TRUE) {
                                echo '<meta http-equiv="refresh" content="0; URL=?deleted" />';
                            } else {
                                echo 'Qandaydir xatolik bor qayta urinib ko`ring';
                            }
                        }
                        
                        ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>