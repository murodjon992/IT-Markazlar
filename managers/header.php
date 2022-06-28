<?
if (!isset($_SESSION)) {
    session_start();
  };
  $man =  stripslashes($_SESSION['usMan']);
  if (!$man) {
     header('Location: /');
  }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,900;1,100;1,300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="./css/style.css?v=<?= time()?>">
  <link rel="stylesheet" href="./css/main.min.css">
</head>
<body>
<div class="d-flex" id="wrapper">
    <div class="second-bG" id="sidebar-wrapper">
        <div class="sidebar-heading border-bottom text-center py-4 primary-text fs-4 fw-bold text-uppercase"><i class="fas fa-user-secret my-3"></i>MENEJER</div>
        <div class="list-group sideList list-group-flush my-3">
            <a href="/"  class="list-group-item side_link <?echo (basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '')?> bg-transparent"><i class="fas fa-home me-2"></i>Uyga</a>
            <a href="selp.php"  class="bg-transparent side_link <?echo (basename($_SERVER['PHP_SELF']) == 'selp.php' ? 'active' : '')?> list-group-item second-text fw-bold"><i class="fas fa-info"></i>Ma'lumotlar</a>
            <a href="pupils.php" class="bg-transparent side_link <?echo (basename($_SERVER['PHP_SELF']) == 'pupils.php' ? 'active' : '')?> list-group-item second-text fw-bold"><i class="fas fa-users"></i>O'quvchilar</a>
            <a href="units.php" class="bg-transparent side_link <?echo (basename($_SERVER['PHP_SELF']) == 'units.php' ? 'active' : '')?> list-group-item second-text fw-bold"><i class="far fa-calendar"></i>Kalendar</a>
            <a href="xabar.php" class="bg-transparent side_link <?echo (basename($_SERVER['PHP_SELF']) == 'xabar.php' ? 'active' : '')?> list-group-item second-text fw-bold"><i class="far fa-envelope"></i>Xabalar</a>
            <a href="logout.php" class="bg-transparent side_link <?echo (basename($_SERVER['PHP_SELF']) == 'logout.php' ? 'active' : '')?> list-group-item second-text fw-bold"><i class="fas fa-sign-out-alt"></i>Chiqish</a>
        </div>
    </div>
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
            <div class="d-flex align-items-center">
                <i id="menu-toggle" class="fas fa-bars primary-text fs-4 mr-3"></i>
                <h2 class="fs-2 m-0 text-light">Dashboard</h2>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item-dropdown">
                        <a href="#" class="nav-link dropdown-toggle second-text fw-bold" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user me-2"></i>Murodjon</a>
                    </li>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a href="#" class="dropdown-item">Profile</a></li>
                        <li><a href="#" class="dropdown-item">Settings</a></li>
                        <li><a href="#" class="dropdown-item">Chiqish</a></li>
                    </ul>
                </ul>
            </div>
        </nav>