<?
if (!isset($_SESSION)) {
    session_start();
  };
  $man =  stripslashes($_SESSION['usMan']);
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
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div class="d-flex" id="wrapper">
    <div class="second-bG" id="sidebar-wrapper">
        <div class="sidebar-heading border-bottom text-center py-4 primary-text fs-4 fw-bold text-uppercase"><i class="fas fa-user-secret my-3"></i>MENEJER</div>
        <div class="list-group list-group-flush my-3">
        <a href="/"  class="list-group-item side_link bg-transparent"><i class="fas fa-home me-2"></i>Bosh sahifaga</a>
            <a href="#!"  class="list-group-item side_link bg-transparent"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="./selp.php" class="bg-transparent side_link list-group-item second-text fw-bold"><i class="fas fa-info"></i>Ma'lumotlar</a>
            <a href="./pupils.php" class="bg-transparent side_link list-group-item second-text fw-bold"><i class="fas fa-users"></i>O'quvchilar</a>
            <a href="./logout.php" class="bg-transparent side_link list-group-item second-text fw-bold"><i class="fas fa-sign-out-alt"></i>Chiqish</a>
        </div>
    </div>
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
            <div class="d-flex w-25 align-items-center">
                <i id="menu-toggle" class="fas fa-bars primary-text fs-4 mr-3"></i>
                <h2 class="fs-2 w-100">Xush kelibsiz</h2>
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
        <div class="container-fluid px-4">
            <div class="row g-3 my-2">
                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div class="fs-2">777</div>
                    <h4>Salom Xurmatli Menejer <strong class="text-success"> <?= $man?> </strong> IT-Markazi fillialiga xush kelibsiz!</h4>
                    <div class="fs-5">mahsulot</div>
                </div>
            </div>
        </div>
    </div>
</div>





<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

  <script type="text/javascript">
      var el = document.querySelector('#wrapper');
      var toggButton = document.querySelector('#menu-toggle');
    
      toggButton.addEventListener('click', function(){
          el.classList.toggle('toggled')
        })
      
  </script>
</body>
</html>