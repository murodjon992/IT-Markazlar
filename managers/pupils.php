<?
include('header.php');
if (!isset($_SESSION)) {
    session_start();
  };
  $man =  stripslashes($_SESSION['usMan']);
  ?>

<div class="container-fluid">
    <div class="row g-3 my-2">
        <div class="bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
            <h4 class="text-center text-dark py-2">O'quvchilar ro'yhati</h4>
            <p id="msg"></p>
        </div>
    </div>
    <div class="back" id="tableT">
        <div class="container-fluid">
            <!-- Button trigger modal -->
            <div id="tepaAdmin" class="input-group">
                <button type="button" class="btn btn-primary mb-2 shadow" data-toggle="modal" data-target="#staticBackdrop">
                    O'quvchi Qo'shish
                </button>
            </div>
            
            <!-- Modal -->
            <div class="modal fade modalBac" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modalCenter">
                    <div class="modal-content">
                        <div class="modal-header bg-warning">
                            <h5 class="modal-title" id="staticBackdropLabel">O'quvchilarni ro'yhatdan o'tkazish</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <small class="text-muted text-center">Eslama <span class="text-danger"> *</span> berilgan xar bir katak to'ldirishi shart!</small>
                        <div class="modal-body modalInner">
                            <form id="usRegForm" class="row g-3">
                                <!-- <div class="row g-3"> -->
                                    <div class="col-md-12 row mt-3">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="pb-2" for="text"><i class="fa fa-user"></i> Ismi <span class="text-danger"> * </span></label>
                                                <input type="text" name="stuname" id="stuname" class="form-control inp" placeholder="Ism... ">
                                                <span id="sucMsg1"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="pb-2" for="text"><i class="fas fa-at"></i> Familiyasi <span class="text-danger"> * </span></label>
                                            <input type="emai" name="stLastname" id="stLastname" class="form-control inp" placeholder="Familiya...">
                                            <span id="sucMsg2"></span>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="pb-2" for="text"><i class="fas fa-phone-alt"></i> Telefon raqami <span class="text-danger"> * </span></label>
                                            <input name="phone" id="phone" class="form-control" type="text" placeholder="901234567">
                                            <span id="sucMsg3"></span>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 row mt-3">
                                        <div class="col-3">
                                            <label class="pb-2" for="text"><i class="fas fa-globe"></i> MANZIL <span class="text-danger"> * </span></label><br>
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
                                        <span id="sucMsg4"></span>
                                    </div>
                                    <div class="col-3">
                                        <label class="pb-2" for="text"><i class="fas fa-chalkboard"></i> Kurs <span class="text-danger"> * </span></label><span id="sucMsg5"></span><br>
                                        <select class="form-control" name="kurs" id="kurs">
                                            <option value="">Kursni tanlang</option>
                                            <option value="Kom-Sav">Kompyuter Savodhonligi</option>
                                            <option value="RITT">Raqamlashirish va IT Tadbirkorlik(RITT)</option>
                                            <option value="Frontend">Frontend Dasturlash</option>
                                            <option value="Backend">Backend Dasturlash</option>
                                            <option value="Grafik">Grafik Web Dizayn</option>
                                            <option value="Robototexnika">Robototexnika</option>
                                            <option value="Kibersport">Kibersport</option>
                                            <option value="SMM">SMM</option>
                                            <option value="3D">3D Dizayn</option>
                                            <option value="IT-English">IT English</option>
                                            <option value="OMUC">One Million Uzbek Coders(OMUC)</option>
                                            <option value="Techbika">Techbika</option>
                                            <option value="ITWomanUZ">ITWomanUZ</option>
                                            <option value="FSU">Future Skills Uzbekistan(FSU)</option>
                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <label class="pb-2" for="text"><i class="far fa-calendar-alt"></i></i> Tug'ilgan sana <span class="text-danger"> * </span></label><span id="sucMsg6"></span><br>
                                        <input class="form-control" id="date" type="date" name="date">
                                    </div>
                                    <div class="col-3">
                                        <label class="pb-2" for="text"><i class="far fa-calendar-alt"></i></i> Kelgan sana <span class="text-danger"> * </span></label><span id="sucMsg7"></span><br>
                                        <input class="form-control" id="appDate" type="date" name="appDate">
                                    </div>
                                </div>
                                <div class="col-12 row mt-3">
                                    <div class="col-md-3">
                                        <label class="pb-2" for="text"><i class="fas fa-lock"></i> Parol <span class="text-danger"> * </span></label><span id="sucMsg8"></span>
                                        <input type="password" name="stpass" id="stpass" class="form-control inp" placeholder="parolni kiriting">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="pb-2" for="text"><i class="fas fa-lock"></i> Parolni tasdiqlang <span class="text-danger"> * </span></label><span id="sucMsg9"></span>
                                        <input type="password" name="stcpass" id="stcpass" class="form-control inp" placeholder="parolni tasdiqlang">
                                    </div>
                                    <div class="col-md-3" style="font-size: 20px;">

                                        <label class="pb-2" for="text"><i class="fas fa-users"></i> Jinsi <span class="text-danger"> * </span></label><span id="sucMsg10"></span><br>
                                        <div class="d-flex align-items-center">
                                            <input class="mr-1" style="width: 18px; height: 18px;" id="gender" type="radio" value="erkak" name="gender">Erkak
                                            <input class="ml-3" id="gender" style="width: 18px; height: 18px;" type="radio" value="ayol" name="gender">Ayol
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="pb-2" for="text"><i class="fas fa-phone-alt"></i> Passport (Metrka) <span class="text-danger"> * </span></label><span id="sucMsg11"></span>
                                        <input class="form-control" name="selfId" id="selfId" type="text" placeholder="AB1234567">
                                        
                                    </div>
                                </div>
                                <!-- </div> -->
                            </form>
                        </div>
                        <div class="modal-footer modalInner justify-content-center">
                            <span class="p-3" id="sucMsg"></span>
                            <div> <button type="button" aria-hidden="true" class="btn btn-danger" aria-label="Close" data-dismiss="modal">Bekor qilish</button>
                            <button id="signUp" type="button" class="btn btn-primary" onclick="addStu()">Ro'yhatdan o'tish</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <table id="table_id" class="table table-dark shadow table-hover">
            <thead>
                <tr>
                    <th>№</th>
                        <th>Ismi</th>
                        <th>Familiyasi</th>
                        <th>Jinsi</th>
                        <th>Yozilgan sana</th>
                        <th>Manzil:</th>
                        <th>Telefon</th>
                        <th>Passport</th>
                        <th>Kursi</th>
                        <th>Xarakatlar</th>
                    </tr>
                </thead>
                <tbody>
                    <?
                    include_once('../db.php');
                    $sql = mysqli_query($conn, "SELECT * FROM users");
                    $number = 1;
                    while ($row = mysqli_fetch_assoc($sql)) {
                    ?>
                        <tr class="text-center align-items-center">
                            <td><?= $number ?></td>
                            <td><?= $row['name'] ?></td>
                            <td><?= $row['surname'] ?></td>
                            <td><?= $row['gender'] ?></td>
                            <td><?= $row['app_date'] ?></td>
                            <td>
                                <? $ad = $row['address']?>
                                <p style="border-radius: 10px;" class="bg-secondary p-1 text-light text-center shadow rounded"><?= $ad ?></p>
                            </td>
                            <td><?= $row['phone'] ?></td>
                            <td><?= $row['passport'] ?></td>
                            <td>
                                <p style="border-radius: 10px;" class="bg-secondary p-1 text-light text-center rounded"><?= $row['dev_type'] ?></p>
                            </td>
                            <td>
                                <button class="btn btn-info shadow" data-info="<?= $row['id'] ?>" id="infoUser"><i class="fas fa-info"></i></button>
                                <button id="btnEdit" <?= $man == $ad ? '' : 'disabled'?> type="button" data-toggle="modal" data-edit="<?= $row['id'] ?>" class="btn btn-success mr-1 shadow "><i class="fas fa-edit"></i></button>
                                <button <?= $man == $ad ? '' : 'disabled'?> id="btnDel" data-sid="<?= $row['id'] ?>" class="btn btn-danger shadow"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>

                    <? $number++;
                    } ?>
                </tbody>
            </table>

        </div>

    </div>
</div>


<!-- Modal info -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">O'quvchi haqida ma'lumot</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body infoUser">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Chiqish</button>
            </div>
        </div>
    </div>
</div>

<!-- ############################################ modal edit ###################################################################-->
<div class="modal fade" id="staticBackdropEdit" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropEdit" aria-hidden="true">
    <div class="modal-dialog modal-xl modalCenter">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title infoTitle" id="staticBackdropEdit edTitle">O'quvchi ma'lumotlarini tahrirlash</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <small class="text-muted text-center">Eslatma <span class="text-danger"> *</span> berilgan xar bir katak to'ldirishi shart!</small>
            <div class="modal-body">
                <form id="usRegForm">
                    <div class="form-row">
                    <input type="hidden" class="updateId">
                    <div class="col-12 row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="text"><i class="fa fa-user"></i> Ismi <span class="text-danger"> *</span></label>
                                    <input type="text" name="stuname" id="ename" class="form-control inp mb-2">
                                    <span id="sucMsg20"></span>
                                </div>
                            </div>
                            <div class="col-4">
                                <label for="text"><i class="fas fa-at"></i> Familiyasi <span class="text-danger"> *</span></label>
                                <input type="text" name="stemail" id="eemail" class="form-control inp">
                                <span id="sucMsg21"></span>
                            </div>
                            <div class="col-4">
                                <label for="text"><i class="fas fa-phone-alt"></i> Telefon raqami <span class="text-danger"> *</span></label>
                                <input id="ephone" class="form-control" type="text">
                                <span id="sucMsg22"></span>
                            </div>
                        </div>
                        <div class="col-12 row">
                            <div class="col-3 selMan">
                                <label class="mt-2" for="text"><i class="fas fa-globe"></i> MANZIL <span class="text-danger"> *</span></label><span id="sucMsg23"></span><br>
                                <select class="form-control mt-2" name="" id="manzil">
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
                            <div class="col-3 kursE">
                                <label class="mt-2" for="text"><i class="fas fa-chalkboard"></i> Kurs <span class="text-danger"> *</span></label><span id="sucMsg24"></span><br>
                                <select class="form-control" name="" id="kurs">
                                    <option value="Komp-Sav">Kom-Sav</option>
                                    <option value="RITT">RITT</option>
                                    <option value="Frontend">Frontend</option>
                                    <option value="Backend">Backend</option>
                                    <option value="Grafik">Grafik</option>
                                    <option value="Robototexnika">Robototexnika</option>
                                    <option value="Kibersport">Kibersport</option>
                                    <option value="SMM">SMM</option>
                                    <option value="3D">3D</option>
                                    <option value="IT-English">IT-English</option>
                                    <option value="OMUC">OMUC</option>
                                    <option value="Techbika">Techbika</option>
                                    <option value="ITWomanUZ">ITWomanUZ</option>
                                    <option value="FSU">FSU</option>
                                </select>

                            </div>
                            <div class="col-3">
                                <label class="mt-2" for="text"><i class="far fa-calendar-alt"></i></i> Tug'ilgan sana <span class="text-danger"> *</span></label><span id="sucMsg25"></span><br>
                                <input class="form-control" id="sanaT" type="date" name="date">
                            </div>
                            <div class="col-3">
                                <label class="mt-2" for="text"><i class="far fa-calendar-alt"></i></i> Kelgan sana <span class="text-danger"> *</span></label><span id="sucMsg26"></span><br>
                                <input class="form-control" id="sanaK" type="date" name="date">
                            </div>
                        </div>
                        <div class="col-12 row">
                            <div class="col-3">
                                <label class="mt-2" for="text"><i class="fas fa-lock"></i> Parol <span class="text-danger"> *</span></label><span id="sucMsg27"></span>
                                <input type="text" name="stpass" id="stUpass" class="form-control inpE">
                            </div>
                            <div class="col-3">
                                <label class="mt-2" for="text"><i class="fas fa-lock"></i> Parolni tasdiqlang <span class="text-danger"> *</span></label><span id="sucMsg28"></span>
                                <input type="text" name="stcpass" id="stcUpass" class="form-control inpE">
                            </div>
                            <div class="col-3" style="font-size: 20px;">
                                <label class="mt-2" for="text"><i class="fas fa-users"></i> Jinsi <span class="text-danger"> *</span></label><span id="sucMsg30"></span><br>
                                <div id="jinsId" class="d-flex align-items-center">
                                    <input class="mr-1" style="width: 18px; height: 18px;" type="radio" value="erkak" name="gender">Erkak
                                    <input class="ml-3" style="width: 18px; height: 18px;" type="radio" value="ayol" name="gender">Ayol
                                </div>
                            </div>
                            <div class="col-3">
                                <label class="mt-2" for="text"><i class="fas fa-phone-alt"></i> Passport (Metrka) <span class="text-danger"> *</span></label>
                                <input class="form-control" id="eId" type="text" placeholder="AB1234567">
                                <span id="sucMsg29"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-center">
                <span class="p-3" id="sucMsg"></span>
                <div> <button type="button" aria-labelledby="staticBackdropEdit" aria-hidden="true" class="btn btn-danger" aria-label="Close" data-dismiss="modal">Bekor qilish</button>
                    <button id="userUp" onclick="upStu()" type="button" class="btn btn-primary">SAQLASH</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ###################################  mmodal edit end ################################################ -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/searchbuilder/1.3.2/js/dataTables.searchBuilder.min.js"></script>
<script src="https://cdn.datatables.net/searchbuilder/1.3.2/js/searchBuilder.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/datetime/1.1.2/js/dataTables.dateTime.min.js"></script>
<script src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        var table = $('#table_id').DataTable({
            responsive: true,
            select: true,
            rowReorder: true,
            buttons: [{
                    extend: 'excelHtml5',
                    text: '<i class="fas fa-file-excel"></i>',
                    titleAttr: 'Excelga yuborish',
                    className: 'btn btn-success mr-3'
                },
                {
                    extend: 'pdfHtml5',
                    text: '<i class="fas fa-file-pdf"></i>',
                    titleAttr: 'PDFga yuborish',
                    className: 'btn btn-danger'
                }
            ],
        });
        table.buttons().container()
            .appendTo('#tepaAdmin');
        table.searchBuilder.container().appendTo('#tepaAdmin');
    });
</script>
<script src="./js/studentAjaxREquest.js?v=<?= time() ?>"></script>
<?
include('footer.php')
?>