<?
include('./aside/header.php');
?>

<div class="back">
    <h4 class="bg-warning text-center text-dark py-2">O'quvchilar ro'yhati</h4>
    <div class="container">
        <!-- Button trigger modal -->
        <div class="row">
            <div class="col-2">
                <div class="input-group w-100">
                    <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#staticBackdrop">
                        Qo'shish
                    </button>
                </div>
            </div>
            <div class="col-3">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <button class="btn btn-success" type="button"><i class="fa fa-search"></i></button>
                    </div>
                    <input type="text" class="form-control w-50" placeholder="Ro'yxatdan izlash..." aria-label="" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-6 offset-1">
                <div class="row">
                    <form action="./markaz.php" method="post">
                    <div class="input-group mb-3">
                        <select class="custom-select" name="tuman" id="inputGroupSelect02">
                            <option value="">Manzilni Bo'yicha</option>
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
                        <select class="custom-select" name="kurs" id="inputGroupSelect02">
                            <option value="">Kursi bo'yicha</option>
                            <option value="Kompyuter Savodhonligi">Kompyuter Savodhonligi</option>
                            <option value="RITT">Raqamlashirish va IT Tadbirkorlik(RITT)</option>
                            <option value="Frontend">Frontend Dasturlash</option>
                            <option value="Backend">Backend Dasturlash</option>
                            <option value="Grafik">Grafik Web Dizayn</option>
                            <option value="Robototexnika">Robototexnika</option>
                            <option value="Kibersport">Kibersport</option>
                            <option value="SMM">SMM</option>
                            <option value="3D">3D Dizayn</option>
                            <option value="IT English">IT English</option>
                            <option value="OMUC">One Million Uzbek Coders(OMUC)</option>
                            <option value="Techbika">Techbika</option>
                            <option value="ITWomanUZ">ITWomanUZ</option>
                            <option value="FSU">Future Skills Uzbekistan(FSU)</option>
                        </select>
                        <div class="input-group-append">
                            <button type="submit" name="search" class="btn btn-info"><i class="fas fa-filter"></i></button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modalCenter">
                <div class="modal-content">
                    <div class="modal-header bg-warning">
                        <h5 class="modal-title" id="staticBackdropLabel">O'quvchilarni ro'yhatdan o'tkazish</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <small class="text-muted text-center">Eslama <span class="text-danger"> *</span> berilgan xar bir katak to'ldirishi shart!</small>
                    <div class="modal-body">
                        <form id="usRegForm">
                            <div class="form-row">
                                <div class="col-12 d-flex">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="text"><i class="fa fa-user"></i> Ismi <span class="text-danger"> *</span></label>
                                            <span id="sucMsg1"></span>
                                            <input type="text" name="stuname" id="stuname" class="form-control inp" placeholder="Ismingizni kiriting">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <label for="text"><i class="fas fa-at"></i> Familiyasi <span class="text-danger"> *</span></label><span id="sucMsg2"></span>
                                        <input type="emai" name="stemail" id="stemail" class="form-control inp" placeholder="Elektron pochta">
                                    </div>
                                    <div class="col-4">
                                        <label for="text"><i class="fas fa-phone-alt"></i> Telefon raqami <span class="text-danger"> *</span></label>
                                        <input class="form-control" type="text" placeholder="901234567">
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-3">
                                        <label for="text"><i class="fas fa-globe"></i> MANZIL <span class="text-danger"> *</span></label><span id="sucMsg3"></span><br>
                                        <select class="form-control" name="" id="">
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
                                    <div class="col-3">
                                        <label for="text"><i class="fas fa-chalkboard"></i> Kurs <span class="text-danger"> *</span></label><span id="sucMsg3"></span><br>
                                        <select class="form-control" name="" id="">
                                            <option value="Kompyuter Savodhonligi">Kompyuter Savodhonligi</option>
                                            <option value="RITT">Raqamlashirish va IT Tadbirkorlik(RITT)</option>
                                            <option value="Frontend">Frontend Dasturlash</option>
                                            <option value="Backend">Backend Dasturlash</option>
                                            <option value="Grafik">Grafik Web Dizayn</option>
                                            <option value="Robototexnika">Robototexnika</option>
                                            <option value="Kibersport">Kibersport</option>
                                            <option value="SMM">SMM</option>
                                            <option value="3D">3D Dizayn</option>
                                            <option value="IT English">IT English</option>
                                            <option value="OMUC">One Million Uzbek Coders(OMUC)</option>
                                            <option value="Techbika">Techbika</option>
                                            <option value="ITWomanUZ">ITWomanUZ</option>
                                            <option value="FSU">Future Skills Uzbekistan(FSU)</option>
                                        </select>

                                    </div>
                                    <div class="col-3">
                                        <label for="text"><i class="far fa-calendar-alt"></i></i> Tug'ilgan sana <span class="text-danger"> *</span></label><span id="sucMsg3"></span><br>
                                        <input class="form-control" type="date" name="date">
                                    </div>
                                    <div class="col-3">
                                        <label for="text"><i class="far fa-calendar-alt"></i></i> Kelgan sana <span class="text-danger"> *</span></label><span id="sucMsg3"></span><br>
                                        <input class="form-control" type="date" name="date">
                                    </div>
                                </div>
                                <div class="col-12 d-flex">
                                    <div class="col-3">
                                        <label for="text"><i class="fas fa-lock"></i> Parol <span class="text-danger"> *</span></label><span id="sucMsg3"></span>
                                        <input type="password" name="stpass" id="stpass" class="form-control inp" placeholder="parolni kiriting">
                                    </div>
                                    <div class="col-3">
                                        <label for="text"><i class="fas fa-lock"></i> Parolni tasdiqlang <span class="text-danger"> *</span></label><span id="sucMsg4"></span>
                                        <input type="password" name="stcpass" id="stcpass" class="form-control inp" placeholder="parolni tasdiqlang">
                                    </div>
                                    <div class="col-3" style="font-size: 20px;">
                                        <label for="text"><i class="fas fa-users"></i> Jinsi <span class="text-danger"> *</span></label><span id="sucMsg3"></span><br>
                                        <div class="d-flex align-items-center">
                                            <input class="mr-1" style="width: 18px; height: 18px;" type="radio" value="erkak" name="gender">Erkak
                                            <input class="ml-3" style="width: 18px; height: 18px;" type="radio" value="ayol" name="gender">Ayol
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <label for="text"><i class="fas fa-phone-alt"></i> Passport (Metrka) <span class="text-danger"> *</span></label>
                                        <input class="form-control" type="text" placeholder="AB1234567">

                                    </div>
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
        <table class="table table-striped table-info">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Ismi</th>
                    <th>Familiyasi</th>
                    <th>Tug'ilgan sana</th>
                    <th>Yozilgan sana</th>
                    <th>Manzil:</th>
                    <th>Telefon</th>
                    <th>Kursi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?
                include('./db.php');
                $sql = mysqli_query($conn, "SELECT * FROM users");
                if (isset($_POST['search'])) {
                    $tuman = $_POST['tuman'];
                    $kurs = $_POST['kurs'];
                    $sql = mysqli_query($conn, "SELECT * FROM users WHERE address = '{$tuman}' AND dev_type = '{$kurs}'");
                } 
                while ($row = mysqli_fetch_assoc($sql)) {

                ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['surname'] ?></td>
                        <td><?= $row['birthday'] ?></td>
                        <td><?= $row['app_date'] ?></td>
                        <td>
                            <p style="border-radius: 10px;" class="bg-danger text-center p-1"><?= $row['address'] ?></p>
                        </td>
                        <td><?= $row['phone'] ?></td>
                        <td><?= $row['dev_type'] ?></td>
                        <td class="d-flex">
                            <button class="btn btn-success mr-1"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                <? } ?>
            </tbody>
        </table>


    </div>

</div>

<?
include('./aside/footer.php');
?>