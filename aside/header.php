<? session_start();
include('db.php'); 
$user_phone = $_COOKIE['phone'];
$user_password = $_COOKIE['password'];
$user_id = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Site</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,900;1,100;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css?v=<?= time(); ?>">
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light w-100 p-2 bg-dark">
        <a href="index.php" class="navbar-brand">Andijon <span class="text-danger">IT-MARKAZ</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav">
                    <li class="nav-item custom_nav"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item custom_nav"><a href="/galereya.php" class="nav-link">Galereya</a></li>
                    <li class="nav-item custom_nav"><a href="/markaz.php" class="nav-link">Markazlar</a></li>
                    <li class="nav-item custom_nav"><a href="/narx.php" class="nav-link">Kurs narxlari</a></li> 
            
             </ul>
        </div>
            <div class="form-outline">
                <input type="search" placeholder="Izlash..." id="form1" class="form-control pl-4" />
            </div>
            <button type="button" class="btn btn-primary">
                <i class="fas fa-search"></i>
            </button>
            </div>
            <a href="ustaBor/user-logout.php?id=<?= $user_id?>" style="display: <?= $user_id ? 'block' : 'none'?>;" class="mr-4">Chiqish</a>
        <button  class="btn btn-success mr-4" type="button" data-toggle="modal" data-target="#staticUserLogin" style="display: <?= !$user_id ? 'block' : 'none'?>;">Kirish</button>
        <?
        if (isset($_SESSION['is_login'])) { ?>
            <a href='logOut.php' class='btn btn-danger' type='button' data-toggle='tooltip' data-placement='bottom' title='chiqish'><i class='fas fa-sign-out-alt'></i></a>
            <button class='btn btn-warning ml-4' type='button' data-toggle='tooltip' data-placement='bottom' title='Profil haqida'>Profilim</button>
        <?
        } else {
            echo '
                        <button data-placement="bottom" title="Akkauntga kirish" class="btn btn-success" type="button" data-toggle="modal" data-target="#staticKirish"><i class="fas fa-sign-in-alt"></i></button>
                <button  class="btn btn-warning ml-4" type="button" data-toggle="modal" data-target="#staticBackdrop">Ro\'yhatdan o\'tish</button>
                        ';
        }

        ?>



        <!-- </div> -->
    </nav>