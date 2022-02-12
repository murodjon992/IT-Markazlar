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

    <div class="container-fluid">
        <div class="vid-parent">
            <video style="width: 100%" autoplay playsinline muted loop src="video/3D House Animation.mp4"></video>
            <div class="vid-overlay">

            </div>
            <div class="vid-content">
                <h1 class="my-content text-white"><strong>Andijon IT Markazlariga </strong> <span class="text-danger"> Xush kelibsiz!</span></h1> <br>
                <small class="my-content text-white pb-2">Ishlarni ko'ring va Zavq oling!</small> <br>
                <a href="#!" class="btn btn-danger my-1 p-2">Qani KEtdik</a>
            </div>
        </div>

    </div>

    <!-- cards -->
    <div class="container-fluid cards__section">
        <h2 class="title text-center text-white py-4">Bizdagi mavjud ishlar</h2>
        <div class="row justify-content-between px-3">
            <div class="col-xl-3 col-lg-3 col-md-6 col-xs-12 px-3">
                <div class="card text-center my-3">
                    <img src="https://www.js-kitchen.com/wp-content/uploads/2021/03/Metal-Roofing-Materials.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title p-3">IQBOLJON usta</h5>
                        <p class="card-text px-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary my-3 p-2">ustaga bog'lanish</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-xs-12 px-3">
                <div class="card text-center my-3">
                    <img src="https://www.js-kitchen.com/wp-content/uploads/2021/03/Metal-Roofing-Materials.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title p-3">IQBOLJON usta</h5>
                        <p class="card-text px-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary my-3 p-2">ustaga bog'lanish</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-xs-12 px-3">
                <div class="card text-center my-3">
                    <img src="https://www.js-kitchen.com/wp-content/uploads/2021/03/Metal-Roofing-Materials.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title p-3">IQBOLJON usta</h5>
                        <p class="card-text px-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary my-3 p-2">ustaga bog'lanish</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-xs-12 px-3">
                <div class="card text-center my-3">
                    <img src="https://www.js-kitchen.com/wp-content/uploads/2021/03/Metal-Roofing-Materials.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title p-3">IQBOLJON usta</h5>
                        <p class="card-text px-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary my-3 p-2">ustaga bog'lanish</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact -->
    <div class="container mx-auto mt-4">
        <h2 class="text-center mb-4">Biz bilan bog'lanish</h2>
        <div class="row">
            <div class="col-md-6">
                <form action="" method="POST">
                    <input type="text" placeholder="Ism ..." name="ism" class="form-control pl-3 mb-4">
                    <input type="text" placeholder="Familiya ..." name="ism" class="form-control pl-3 mb-4">
                    <input type="text" placeholder="Email ..." name="ism" class="form-control pl-3 mb-4">
                    <input type="text" placeholder="Telefon ..." name="ism" class="form-control pl-3 mb-4">
                    <textarea class="form-control p-3" placeholder="Talab va Takliflar uchun ..."></textarea>
                    <button type="submit" class="btn btn-success p-3 mt-3">Yuborish</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid p-3 my-4">
        <h2 class="text-danger text-center py-3">Mijozlarning biz haqimizdagi fikrlari</h2>
        <div class="our_client">
            <div class="card_client">
                <p class="card_text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi debitis nobis porro fuga, nihil soluta assumenda possimus tenetur nemo exercitationem?
                </p>
                <img class="client_img" src="https://www.wraltechwire.com/wp-content/uploads/2019/03/jeff-bezos.jpg" alt="">
                <h2 class="card_title">Nurmuhammad Mamirjonov</h2>
                <p class="card_job">WEb Developer</p>
            </div>
            <div class="card_client">
                <p class="card_text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi debitis nobis porro fuga, nihil soluta assumenda possimus tenetur nemo exercitationem?
                </p>
                <img class="client_img" src="https://www.wraltechwire.com/wp-content/uploads/2019/03/jeff-bezos.jpg" alt="">
                <h2 class="card_title">Nurmuhammad Mamirjonov</h2>
                <p class="card_job">WEb Developer</p>
            </div>
            <div class="card_client">
                <p class="card_text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi debitis nobis porro fuga, nihil soluta assumenda possimus tenetur nemo exercitationem?
                </p>
                <img class="client_img" src="https://www.wraltechwire.com/wp-content/uploads/2019/03/jeff-bezos.jpg" alt="">
                <h2 class="card_title">Nurmuhammad Mamirjonov</h2>
                <p class="card_job">WEb Developer</p>
            </div>
            <div class="card_client">
                <p class="card_text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi debitis nobis porro fuga, nihil soluta assumenda possimus tenetur nemo exercitationem?
                </p>
                <img class="client_img" src="https://www.wraltechwire.com/wp-content/uploads/2019/03/jeff-bezos.jpg" alt="">
                <h2 class="card_title">Nurmuhammad Mamirjonov</h2>
                <p class="card_job">WEb Developer</p>
            </div>
        </div>
    </div>


    <footer class="footer bg-dark text-white py-3">
        <div class="container mx-auto">
            <div class="row">
                <div class="col-md-4">

                    <a href="#!" class="logo">Ncode</a>
                </div>
                <div class="col-md-4">
                    <h2 class="footer_title">Biz haqimizda</h2>
                    <ul class="foot_list">
                        <li><a href="#" class="foot_link">Web dasturlash</a></li>
                        <li><a href="#" class="foot_link">WEb Dizayn</a></li>
                        <li><a href="#" class="foot_link">Kompyuterlarga texnik yordam</a></li>
                        <li><a href="#" class="foot_link">Web dasturlash</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h2 class="footer_title">Biz bilan bog'lanish</h2>
                    <div class="row">
                        <div class="col-7">
                            <ul class="foot_list">
                                <li><a href="https://goo.gl/maps/KH8jqhmJSNbG3FtX8" class="foot_link">Naqshbandiy 128-A uy</a></li>
                                <li><a href=""><i class="fas fa-phone-alt"></i> +998 90 388 83 33</a></li>
                                <li><a href="#" class="foot_link"></a></li>
                                <li><a href="admin.php" class="foot_link"></a></li>
                            </ul>
                        </div>
                        <div class="col-5">
                            <ul class="foot_icons">
                                <li><a class="foot_link" href="">Telegram<i class="fab fa-telegram  pl-2"></i></a></li>
                                <li><a class="foot_link" href="">Google<i class="fab fa-google pl-2"></i></a></li>
                                <li><a class="foot_link" href="">Faebook<i class="fab fa-facebook-f pl-2"></i></a></li>
                                <li><a class="foot_link" href="">Instagram<i class="fab fa-instagram pl-2"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer-copyright text-center py-3 mt-4">© 2022 Ncode: |
            <a href="" data-toggle="modal" data-target="#staticAdmin"> Admin</a>
        </div>
    </footer>


    <!-- user Registration -->

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modalCenter">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title" id="staticBackdropLabel">Ro'yhatdan o'tish</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="usRegForm">
                        <div class="form-row">
                            <div class="col-10 offset-1">
                                <label for="text"><i class="fa fa-user"></i> Ismingiz *</label>
                                <span id="sucMsg1"></span>
                                <input type="text" name="stuname" id="stuname" class="form-control inp" placeholder="Ismingizni kiriting">

                                <label for="text"><i class="fas fa-at"></i> Email *</label><span id="sucMsg2"></span>
                                <input type="emai" name="stemail" id="stemail" class="form-control inp" placeholder="Elektron pochta">

                                <label for="text"><i class="fas fa-lock"></i> Parol *</label><span id="sucMsg3"></span>
                                <input type="password" name="stpass" id="stpass" class="form-control inp" placeholder="parolni kiriting">
                                <label for="text"><i class="fas fa-lock"></i> Parolni tasdiqlang *</label><span id="sucMsg4"></span>
                                <input type="password" name="stcpass" id="stcpass" class="form-control inp" placeholder="parolni tasdiqlang">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-center">
                    <span class="p-3" id="sucMsg"></span>
                    <div> <button type="button" aria-hidden="true" class="btn btn-danger" aria-label="Close" data-dismiss="modal">Bekor qilish</button>
                        <button id="signUp" type="button" class="btn btn-primary" onclick="addStu()">Ro'yhatdan o'tish</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- user Registration  end-->
    <!-- user login -->
    <div class="modal fade" id="staticKirish" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticKirishLabel" aria-hidden="true">
        <div class="modal-dialog modalCenter">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title text-white" id="staticKirishLabel">Kirish</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <div class="col-10 offset-1">
                                <label for="text"><i class="fas fa-at"></i> Email *</label>
                                <input type="email" id="usLogEmail" class="form-control inp" placeholder="Elektron pochta">

                                <label for="text"><i class="fas fa-lock"></i> Parol *</label>
                                <input type="password" id="usPass" class="form-control inp" placeholder="parolni kiriting">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <small id="statusLogMsg"></small>
                    <button type="button" onclick="checkLogin()" class="btn btn-success">Kirish</button>
                </div>
            </div>
        </div>
    </div>
    <!-- user login end -->
    <!-- admin login -->
    <div class="modal fade" id="staticAdmin" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticKirishLabel" aria-hidden="true">
        <div class="modal-dialog modalCenter">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-white" id="staticKirishLabel">Admin uchun</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <div class="col-10 offset-1">
                                <label for="text"><i class="fas fa-at"></i>Admin Email *</label>
                                <input type="email" id="adminLogEmail" class="form-control inp" placeholder="Elektron pochta">

                                <label for="text"><i class="fas fa-lock"></i>Admin Parol *</label>
                                <input type="password" id="adminPass" class="form-control inp" placeholder="parolni kiriting">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <small id="statusAdminLogMsg"></small>
                    <button type="button" onclick="checkAdminLogin()" class="btn btn-success">Kirish</button>
                    <button type="button" data-dismiss="modal" onclick="" class="btn btn-secondary">Bekor qilish</button>
                </div>
            </div>
        </div>
    </div>
    <!-- admin login end -->
    <!-- user (pupil) login -->
    <div class="modal fade" id="staticUserLogin" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticKirishLabel" aria-hidden="true">
        <div class="modal-dialog modalCenter">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title text-white" id="staticKirishLabel">Kirish</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="user_login">
                        <div class="form-row">
                            <div class="col-10 offset-1">
                                <label for="text"><i class="fas fa-phone"></i> Telefon raqam *</label>
                                <input type="email" name="phone" value="<?= $user_phone ? $user_phone : ''?>" class="form-control inp" placeholder="Telefon raqamni kiriting" required>
                                <label for="text"><i class="fas fa-lock"></i> Parol *</label>
                                <input type="password" name="password" value="<?= $user_password ? $user_password : ''?>" class="form-control inp" placeholder="Parolni kiriting" required>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <small class="errorInfo bg-warning "></small>
                    <button type="button" class="btn btn-success userSubmitBtn">Kirish</button>
                </div>
            </div>
        </div>
    </div>
    <!-- user login end -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/brands.min.js" integrity="sha512-8Jp5PI7qKEn304XONokQQRgiu/1P9kTBlvpLc7zRukkTBYGKt6z4CkwJUJhCwwWYnjSdxJcGqW9ifT7ZxPNgbg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/ajaxRequest.js?v=<?= time(); ?>"></script>
    <script src="js/adminAjaxRequest.js?v=<?= time(); ?>"></script>
    <script src="js/userLogin.js?v=<?= time(); ?>"></script>
    <script type="text/javascript">
        function kechir(){
            // e.preventDefault()
            swal({
                text: "Kechirasiz avval ro'yhatdan o'ting",
                icon: 'warning',
                className: 'red-bg'
            });
        }
    </script>


</body>

</html>