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
                <button  class="btn btn-outline-light shadow" type="button" data-toggle="modal" data-target="#staticBackdrop">Profil <i class="fas fa-chevron-down"></i></button>
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
    <div id="carouselExampleInterval" class="carousel slide h-80vh" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="5000">
                <img src="img/web-3963945_1920.jpg" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="carousel-item" data-interval="3000">
                <img src="img/web-3963945_1920.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/web-3963945_1920.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleInterval" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden"></span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleInterval" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden"></span>
        </button>
    </div>
    </div>

    </div>

    <!-- cards -->
    <div class="container-fluid cards__section">
        <h2 class="title text-center text-white py-4">Bizdagi O'quv Kurslar?</h2>
        <div class="row mx-auto">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="card_malumot">
                    <a href="#!" class="kurs_malumot">
                        <div class="kurs_blog">
                            <img class="kurs_image" src="https://www.usnews.com/dims4/USNEWS/7a6fb8a/2147483647/crop/2000x1334%2B0%2B2/resize/970x647/quality/85/?url=http%3A%2F%2Fmedia.beam.usnews.com%2F65%2F62%2Fc9cb60d24ac89d56462b1228574a%2F201009-codingcomputer-stock.jpg" alt="">
                            <p class="card__add">Ko'proq... <br><i class="fas fa-link"></i></p>
                            <p class="card__info">backend</p>
                        </div>
                    </a>
                    <div class="card-body">
                        <h2 class="card_title">Web dasturlash</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card_malumot">
                    <a href="#!" class="kurs_malumot">
                        <div class="kurs_blog">
                            <img class="kurs_image" src="https://justcreative.com/wp-content/uploads/2018/11/adobe-cc.jpg" alt="">
                            <p class="card__add">Ko'proq... <br><i class="fas fa-link"></i></p>
                            <p class="card__info">AI, PS, FIGMA</p>
                        </div>
                    </a>
                    <div class="card-body">
                        <h2 class="card_title">Grafik dizayn</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="card_malumot">
                    <a href="#!" class="kurs_malumot">
                        <div class="kurs_blog">
                            <img class="kurs_image" src="https://www.anti-malware.ru/files/styles/imagesize400w/public/images/source/news4367.png?itok=-G_ler6n" alt="">
                            <p class="card__add">Ko'proq... <br><i class="fas fa-link"></i></p>
                            <p class="card__info">PHP, PYTHON</p>
                        </div>
                    </a>
                    <div class="card-body">
                        <h2 class="card_title">Telegram bot</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="card_malumot">
                    <a href="#!" class="kurs_malumot">
                        <div class="kurs_blog">
                            <img class="kurs_image" src="https://robo3.ru/upload/iblock/147/EV3_8.jpg" alt="">
                            <p class="card__add">Ko'proq... <br><i class="fas fa-link"></i></p>
                            <p class="card__info">Robototexnika</p>
                        </div>
                    </a>
                    <div class="card-body">
                        <h2 class="card_title">Robototexnika</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="card_malumot">
                    <a href="#!" class="kurs_malumot">
                        <div class="kurs_blog">
                            <img class="kurs_image" src="https://robo3.ru/upload/iblock/147/EV3_8.jpg" alt="">
                            <p class="card__add">Ko'proq... <br><i class="fas fa-link"></i></p>
                            <p class="card__info">Backend</p>
                        </div>
                    </a>
                    <div class="card-body">
                        <h2 class="card_title">Node.js</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="card_malumot">
                    <a href="#!" class="kurs_malumot">
                        <div class="kurs_blog">
                            <img class="kurs_image" src="https://tproger.ru/s3/uploads/2021/08/git-autoconverted-880x308.jpeg" alt="">
                            <p class="card__add">Ko'proq... <br><i class="fas fa-link"></i></p>
                            <p class="card__info">Collaborate</p>
                        </div>
                    </a>
                    <div class="card-body">
                        <h2 class="card_title">Git, Github</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="card_malumot">
                    <a href="#!" class="kurs_malumot">
                        <div class="kurs_blog">
                            <img class="kurs_image img-fluid" src="https://res.cloudinary.com/practicaldev/image/fetch/s--mgVodcWf--/c_imagga_scale,f_auto,fl_progressive,h_900,q_auto,w_1600/https://dev-to-uploads.s3.amazonaws.com/uploads/articles/pp4ll13f5onw4gqj8ggl.jpg" alt="">
                            <p class="card__add">Ko'proq... <br><i class="fas fa-link"></i></p>
                            <p class="card__info">Bootstrap</p>
                        </div>
                    </a>
                    <div class="card-body">
                        <h2 class="card_title">Frontend</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="card_malumot">
                    <a href="#!" class="kurs_malumot">
                        <div class="kurs_blog">
                            <img class="kurs_image img-fluid" src="https://i.ytimg.com/vi/dsHWWuWnuMA/maxresdefault.jpg" alt="">
                            <p class="card__add">Ko'proq... <br><i class="fas fa-link"></i></p>
                            <p class="card__info">Avtomatlashtirish</p>
                        </div>
                    </a>
                    <div class="card-body">
                        <h2 class="card_title">Gulp</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="popup">
            <div class="popup-content">
                <span class="close">X</span>
                <img class="img-fluid" src="" alt="">
            </div>
        </div>
    </div>
    <!-- contact -->
    <div id="shk" class="container mx-auto mt-4">
        <h2 class="text-center mb-4">Biz bilan bog'lanish</h2>
        <div class="row">
            <div class="col-md-6">
                <form action="/#shk" method="POST">
                    <input type="text" placeholder="Ism ..." name="shk_ism" class="form-control pl-3 mb-4">
                    <input type="text" placeholder="Familiya ..." name="shk_familiya" class="form-control pl-3 mb-4">
                    <input type="text" placeholder="Yashash manzilingiz..." name="shk_email" class="form-control pl-3 mb-4">
                    <input type="text" placeholder="901234567" name="shk_tel" class="form-control pl-3 mb-4">
                    <textarea name="xabar" class="form-control p-3" placeholder="Talab va Takliflar uchun ..."></textarea>
                    <button type="submit" name="shikoyat" class="btn btn-success p-3 mt-3">Yuborish</button>
                </form>
                
                <? 
        if (isset($_POST['shikoyat'])) {
            $shName = $_POST['shk_ism'];
            $shFam = $_POST['shk_familiya'];
            $shEmail = $_POST['shk_email'];
            $shTel = $_POST['shk_tel'];
            $shXabar = $_POST['xabar'];
            
            if ($shName == '') {
                $sMsg = '<div class="alert alert-danger">Ism kiritilmadi</div>';
            } else if($shFam == ''){
                $sMsg = '<div class="alert alert-danger">Familiya kiritilmadi</div>';
            } else if($shEmail == ''){
                $sMsg = '<div class="alert alert-danger">Pochta kiritilmadi</div>';
            } else if($shTel == ''){
                $sMsg = '<div class="alert alert-danger">Telefon kiritilmadi</div>';
            } else if($shXabar == ''){
                $sMsg = '<div class="alert alert-danger">Xabar kiritilmadi</div>';
            } else { 
                $sMsg = '<div class="alert alert-success">Xabaringiz qabul qilindi. Tez orada menejerlarimiz siz bilan bog`lanishadi!</div>';
                include 'db.php';
                $sql = mysqli_query($conn, "INSERT INTO shikoyat (shk_name, shk_fam, shk_email, shk_tel, shk_xabar) VALUES('$shName', '$shFam', '$shEmail', '$shTel','$shXabar')");
            };
        }
        ?>
        <div id="shAlert" class="mt-2"><?= $sMsg?></div>
    </div>
    </div>
    </div>
    <div class="container-fluid p-3 my-4">
        <h2 class="text-success text-center py-3">Mijozlarning biz haqimizdagi fikrlari</h2>
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


    <footer class="footer text-white py-3">
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

                                <label for="text"><i class="fas fa-at"></i> Manzil *</label><span id="sucMsg5"></span>
                                <div class="selAdminMan">
                                    <select class="form-control" name="manzil" id="manzil">
                                        <option value="">Manzilni tanlang</option>
                                        <option value="Andijon Shaxar">Andijon Shaxar</option>
                                        <option value="Andijon Tuman">Andijon Tuman</option>
                                        <option value="Asaka">Asaka</option>
                                        <option value="Baliqchi">Baliqchi</option>
                                        <option value="Buloqboshi">Buloqboshi</option>
                                        <option value="Bo'ston">Bo'ston</option>
                                        <option value="Izboskan">Izboskan</option>
                                        <option value="Jalaquduq">Jalaquduq</option>
                                        <option value="Marxamat">Marxamat</option>
                                        <option value="Paxtaobod">Paxtaobod</option>
                                        <option value="Oltinko'l">Oltinko'l</option>
                                        <option value="Qo'rg'ontepa">Qo'rg'ontepa</option>
                                        <option value="Shaxrixon">Shaxrixon</option>
                                        <option disabled value="Ulug'nor">Ulug'nor</option>
                                        <option value="Xo'jaobod">Xo'jaobod</option>
                                        <option value="Xonobod">Xonobod</option>
                                    </select>
                                </div>

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
            <div class="modal-content shadow">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticKirishLabel">Kirish</h5>
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

                                <div id="manAdmin" class="selAdminMan mt-4">
                                    <select class="form-control" name="manzil" id="manzilA">
                                        <option value="">Manzilni tanlang</option>
                                        <option value="Andijon Shaxar">Andijon Shaxar</option>
                                        <option value="Andijon Tuman">Andijon Tuman</option>
                                        <option value="Asaka">Asaka</option>
                                        <option value="Baliqchi">Baliqchi</option>
                                        <option value="Buloqboshi">Buloqboshi</option>
                                        <option value="Bo'ston">Bo'ston</option>
                                        <option value="Izboskan">Izboskan</option>
                                        <option value="Jalaquduq">Jalaquduq</option>
                                        <option value="Marxamat">Marxamat</option>
                                        <option value="Paxtaobod">Paxtaobod</option>
                                        <option value="Oltinko'l">Oltinko'l</option>
                                        <option value="Qo'rg'ontepa">Qo'rg'ontepa</option>
                                        <option value="Shaxrixon">Shaxrixon</option>
                                        <option disabled value="Ulug'nor">Ulug'nor</option>
                                        <option value="Xo'jaobod">Xo'jaobod</option>
                                        <option value="Xonobod">Xonobod</option>
                                    </select>
                                </div>

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
                                <input type="text" name="phone" id="userTel" class="form-control inp" placeholder="Telefon raqamni kiriting" required><span id="userLogmsg"></span> <br>
                                <label for="text"><i class="fas fa-lock"></i> Parol *</label>
                                <input type="password" name="password" id="userPas" class="form-control inp" placeholder="Parolni kiriting" required><span id="userPasmsg"></span> <br>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <small id="errorInfo" class=""></small>
                    <button type="button" onclick="logStudent()" class="btn btn-success userSubmitBtn">Kirish</button>
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
        window.addEventListener('scroll', function() {
            let indicator = document.querySelector('.indiBar')
            const pageScroll = document.body.scrollTop || document.documentElement.scrollTop
            const heigh = document.documentElement.scrollHeight - document.documentElement.clientHeight
            const scrollValue = (pageScroll / heigh) * 100
            if (scrollValue > 50 && scrollValue < 80) {
                indicator.style.background = 'yellow'
            } else if(scrollValue > 80.5){
                indicator.style.background = 'red'
            } else {
                indicator.style.background = 'rgb(34, 235, 7)'

            }

           indicator.style.width = scrollValue + '%'
        })

        let shAl = $('#shAlert')
       
        setTimeout(() => {
            shAl.fadeOut()
        }, 2000);

            
        $('.card_malumot').click(function(e){
            let link = $('.kurs_blog img').attr('src')
                $('.popup').css({
                    display: 'flex',
                })
            $('.popup-content img').attr('src', link)

            console.log($('.kurs_blog').closest('.card_malumot'));
        })
        $('.close').click(function(){
            $('.popup').css({
                display: 'none'
            })

        })
    </script>
</body>

</html>