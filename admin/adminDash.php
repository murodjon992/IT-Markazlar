<?
include_once('../db.php');
if (!isset($_SESSION)) {
    session_start();
} else {
    echo '<script>window.location.href="index.php"</script>;';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,900;1,100;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/admin.css?v=<?= time(); ?>">

</head>
<body>
    <div class="page-wrapper">
        <div class="sidebar-wrapper">
            <div class="sidebar">
                <div class="logo-section d-flex justify-content-center align-items-center">
                    <div class="d-flex justify-content-center align-items-center"><img src="logo-icon" alt=""><span class="logo-text">Ncode</span>
                </div>
            </div>
            <div class="user-info">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <div>
                        <img class="user_img" style="width: 180px; height: 180px;" src="../img/02.JPG" alt="profilimg">
                    </div>
                        <div class="user-desc text-white text-center">
                            <h4>Murodjon</h4>
                            <p>WEB DEVELOPER</p>
                        </div>
                    </div>
                </div>
                <div class="menus px-3">
                    <ul class="nav flex-column">
                        <li class="nav-item"><a href="" class="nav-link"><i class="fas fa-chart-line"></i>Dashboard</a></li>
                        <li class="nav-item"><a href="/admin/kurs.php" class="nav-link"><i class="fas fa-binoculars"></i>Kurslar</a></li>
                        <li class="nav-item"><a href="/admin/usta.php" class="nav-link"><i class="fas fa-users"></i>Ustalar</a></li>
                        <li class="nav-item"><a href="/admin/sotuv.php" class="nav-link"><i class="fas fa-hand-holding-usd"></i>Sotuv</a></li>
                        <li class="nav-item"><a href="/admin/parol.php" class="nav-link"><i class="fas fa-key"></i>Parol yangilash</a></li>
                        <li class="nav-item"><a href="../logOut.php" class="nav-link"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-content-wrapper">
            <div class="page-content">
                <div class="top-bar d-flex align-items-center">
                    <div class="d-flex justify-content-center align-items-center w-100">
                        <?var_dump($_SESSION['adminLogEmail']);?>
                        <button class="toggler btn btn-dark"><i class="fas fa-bars"></i></button>
                        <div class="top-bar-right">
                            <button>nimadir</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>



