<? session_unset();
session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT-Markazlar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,900;1,100;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css?v=<?= time(); ?>">
</head>

<body>
    <div class="container-xxl">
        <nav style="background-color: rgba(45, 53, 87, 0.9); backdrop-filter: blur(18px); box-shadow: 0 0 8px 2px rgba(0,0,0,0.5)" class="navbar fixed-top navbar-expand-sm w-100 p-2">
            <a href="index.php" class="navbar-brand logo">Andijon <span class="text-success">IT-MARKAZ</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav">
                    <li class="nav-item custom_nav"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item custom_nav"><a href="/galereya.php" class="nav-link">Galereya</a></li>
                    <li class="nav-item custom_nav"><a href="/markaz.php" class="nav-link">Markazlar</a></li>
                    <li class="nav-item custom_nav"><a href="./managers/selp.php" class="nav-link">Kurs narxlari</a></li>

                </ul>
            </div>
            <div class="lang">
                <a href="#!" class="lang_uz"><img src="/img/uz.png" alt=""></a>
                <a href="#!" class="lang_uz"><img src="/img/uk.png" alt=""></a>
                <a href="#!" class="lang_uz"><img src="/img/ru.png" alt=""></a>
            </div>

            <div class="form-outline">
                <input type="search" placeholder="Izlash..." id="form1" class="form-control pl-4" />
            </div>
            <button type="button" class="btn btn-primary">
                <i class="fas fa-search"></i>
            </button>

            <a href="ustaBor/user-logout.php?id=<?= $user_id ?>" style="display: <?= $user_id ? 'block' : 'none' ?>;" class="mr-4">Chiqish</a>
            <button class="btn btn-success mr-4" type="button" data-toggle="modal" data-target="#staticUserLogin" style="display: <?= !$user_id ? 'block' : 'none' ?>;">Kirish</button>
            <?
            if (isset($_SESSION['is_login'])) { ?>
                <div class="drMenu">
                    <button class="btn btn-outline-light shadow" type="button" data-toggle="modal" data-target="#staticBackdrop">Profil <i class="fas fa-chevron-down"></i></button>
                    <div class="dropdow-menu">
                        <ul>
                            <li><i class="fa fa-home"></i><a class="drLink text-uppercase" href="./managers/">dashboard</a></li>
                            <li><i class="fa fa-user"></i><a class="drLink text-uppercase" href="/managers/selp.php">profil</a></li>
                            <li><i class="fas fa-sign-out-alt"></i><a class="drLink text-uppercase" href="/managers/logout.php">chiqish</a></li>
                        </ul>
                    </div>

                </div>
            <?
            } else {
                echo '<button data-placement="bottom" title="Akkauntga kirish" class="btn btn-success mr-4" type="button" data-toggle="modal" data-target="#staticKirish"><i class="fas fa-sign-in-alt"></i></button>
                ';
            }

            ?>

            <!-- </div> -->
            <!-- <div class="scrol-container"> -->

            <!-- </div> -->
        </nav>
        <div class="indiBar"></div>
    </div>
<div class="di p-5"></div>
    <table id="table_id" class="table table-light shadow table-hover">
                <thead>
                    <tr class="text-center">
                        <th>№</th>
                        <th>Ismi</th>
                        <th>Familiyasi</th>
                        <th>Jinsi</th>
                        <th>Yozilgan sana</th>
                        <th>To'lov(qoldiq)</th>
                        <th>Manzil:</th>
                        <th>Telefon</th>
                        <th class="thHolat">Holati</th>
                        <th class="thKurs">Kursi</th>
                        <th>Xarakatlar</th>
                    </tr>
                </thead>
                <tbody>
                    <?
                    include('db.php');
                    $userTel = $_POST['userTel'];
                    $sql = mysqli_query($conn, "SELECT * FROM users WHERE phone = {$userTel}");
                    ?>
                    
                        <tr class="text-center align-items-center">
                            <td><?= $number ?></td>
                            <td><?= $row['name'] ?></td>
                            <td><?= $row['surname'] ?></td>
                            <td><?= $row['gender'] ?></td>
                            <td><?= $row['app_date'] ?></td>
                            <? $ad = $row['address'] ?>
                            <td><?if ($ad == $man) {?>
                                <p class="text-success"><strong><?= $row['dur_price']?> so'm </strong></p>
                                <?} else {?>
                                    <p class="text-danger">kechirasiz</p>
                            
                            <?}?></td>
                            <td>
                                <p style="border-radius: 10px;" class="bg-success py-2 text-light text-center shadow rounded"><?= $ad ?></p>
                            </td>
                            <td><?= $row['phone'] ?></td>
                            <td>
                                
                                <? if ($row['status'] == '0') : ?>
                                    <p class="btn btn-info">O'qiyapti</p>
                                    <? elseif ($row['status'] == '1') : ?>
                                        <p class="btn btn-success">Bitirgan</p>
                                <? elseif ($row['status'] == '2') : ?>
                                    <p class="btn btn-danger">Ketgan</p>
                                <? endif; ?>
                            </td>
                            <td>
                                <p class="bg-success py-2 text-light text-center rounded devType"><?= $row['dev_type'] ?></p>
                            </td>
                            <td>
                                <button class="btn btn-info shadow" data-info="<?= $row['id'] ?>" id="infoUser"><i class="fas fa-info"></i></button>
                                <button id="btnEdit" <?= $man == $ad ? '' : 'disabled' ?> type="button" data-toggle="modal" data-edit="<?= $row['id'] ?>" class="btn btn-success mr-1 shadow "><i class="fas fa-edit"></i></button>
                                <button <?= $man == $ad ? '' : 'disabled' ?> id="btnDel" data-sid="<?= $row['id'] ?>" class="btn btn-danger shadow"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                </tbody>
            </table>
</body>

</html>