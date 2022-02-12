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
                <div class="col-sm-6 mt-5 mx-3">
                    <h3 class="text-center">Usta Profilini Tahrirlash</h3>
                    <?
                    include('../db.php');
                    if (isset($_REQUEST['edit'])) {
                        $sql = "SELECT * FROM ustalar WHERE us_id = '".$_REQUEST['id']."'";
                        $result = $conn->query($sql);
                        $row = $result->fetch_array();
                    }
                    ?>

                    <form action="" class="usUpdate" method="post">
                        <div class="form-group">
                            <label for="text">USTA ID</label>
                            <input readonly type="text" class="form-control" id="usta_up" name="usta_up" value="<? if (isset($row['us_id'])){echo $row['us_id'];}?>">
                            <label for="text">USTA ISMI</label>
                            <input type="text" class="form-control" id="usta_upName" name="usta_upName" value="<? if (isset($row['us_name'])){echo $row['us_name'];}?>">
                            <label for="text">USTA EMAIL</label>
                            <input type="text" class="form-control" id="usta_upEmail" name="usta_upEmail" value="<? if (isset($row['us_email'])){echo $row['us_email'];}?>">
                            <label for="text">USTA PAROLI</label>
                            <input type="text" class="form-control" id="usta_upPass" name="usta_upPass" value="<? if (isset($row['us_pass'])){echo $row['us_pass'];}?>">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success" id="usUpdate" name="usUpdate">Yangilash</button>
                            <a href="/admin/usta.php" class="btn btn-danger">Ortga qaytish</a>
                        </div>
                        <?if (isset($_REQUEST['usUpdate'])) {echo $msg;}?>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?  if (isset($_REQUEST['usUpdate'])) {
            if (isset($_REQUEST['usta_up']) == '' || isset($_REQUEST['usta_upName']) == '' || isset($_REQUEST['usta_upEmail']) == '' || isset($_REQUEST['usta_upPass']) == '') {
           $msg = '<div class="alert alert-danger" role="alert">Hamma kattaklar to\'ldirilmagan</div>';
            } else {
            $usId = $_REQUEST['usta_up'];
            $usName = $_REQUEST['usta_upName'];
            $usEmail = $_REQUEST['usta_upEmail'];
            $usPass = $_REQUEST['usta_upPass'];

            $sql = "UPDATE ustalar SET us_id = '$usId', us_name = '$usName', us_email = '$usEmail', us_pass = '$usPass' WHERE us_id = '$usId'";

            if ($conn->query($sql == TRUE)) {
             $msg = '<div class="alert alert-success" role="alert">Ma`lumotlar Yangilandi</div>';
         } else {
                $msg = '<div class="alert alert-danger" role="alert">Qandaydir xatolik bor</div>';

            }
        }
    }?>
</body>
</html>