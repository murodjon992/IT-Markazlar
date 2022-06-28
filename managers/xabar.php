<?include('header.php')?>
<div class="container-fluid px-4">
            <div class="row g-3 my-2">
                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                    <h4>Bu yerda Barcha markazlarga kelgan taklif va shikoyatlarni ko'rishingiz mumkin!</h4>
                   
                </div>
            </div>
        </div>
        <div class="container-fluid">
        <table id="table_id" class="table table-light table-striped shadow ">
                <thead>
                    <tr class="text-center">
                        <th>№</th>
                        <th>Ismi</th>
                        <th>Familiyasi</th>
                        <th>Elektron Pochta</th>
                        <th>Telefon</th>
                        <th>Xabar</th>
                        <th>Harakatlar</th>
                    </tr>
                </thead>
                <tbody>
                    <?
                    include_once('../db.php');
                    $sql = mysqli_query($conn, "SELECT * FROM shikoyat");
                    $number = 1;
                    while ($row = mysqli_fetch_assoc($sql)) {
                    ?>
                        <tr class="text-center align-items-center">
                            <td><?= $number ?></td>
                            <td><?= $row['shk_name'] ?></td>
                            <td><?= $row['shk_fam'] ?></td>
                            <td><?= $row['shk_email'] ?></td>
                            <td><?= $row['shk_tel'] ?></td>
                            <td class="w-25"><?= $row['shk_xabar'] ?></td>
                            
                            <td>
                                <button class="btn btn-info shadow" data-info="<?= $row['id'] ?>" id="infoUser"><i class="fas fa-info"></i></button>
                                <button id="btnEdit" <?= $man == $ad ? '' : 'disabled' ?> type="button" data-toggle="modal" data-edit="<?= $row['id'] ?>" class="btn btn-success mr-1 shadow "><i class="fas fa-edit"></i></button>
                                <button <?= $man == $ad ? '' : 'disabled' ?> id="btnDel" data-sid="<?= $row['id'] ?>" class="btn btn-danger shadow"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>

                    <? $number++;
                    } ?>
                </tbody>
            </table>
            </div>
    </div>
</div>
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
<?include('footer.php')?>