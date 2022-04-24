function addStu() {
  let stName = $("#stuname").val();
  let stLastname = $("#stLastname").val();
  let phone = $("#phone").val();
  let manzil = $("#manzil").val();
  let kurs = $("#kurs").val();
  let sana = $("#date").val();
  let qabulSana = $("#appDate").val();
  let stPass = $("#stpass").val();
  let stcPass = $("#stcpass").val();
  let jins = $("input[name=gender]:checked").val();
  let selfId = $("#selfId").val();


  if (stName.trim() == "") {
    $("#sucMsg1").html(
      '<span class="text-danger text-right">Ism kiritilmadi</span>'
    );
    $("#stuname").focus();
    return false;
  } else if (stLastname.trim() == "") {
    $("#sucMsg2").html('<span class="text-danger">Familiya kiritilmadi</span>');
    $("#stLastname").focus();
    return false;
  } else if (phone.trim() == "") {
    $("#sucMsg3").html('<span class="text-danger">Telefon kiritilmadi</span>');
    $("#phone").focus();
    return false;
  } else if (manzil.trim() == "") {
    $("#sucMsg4").html('<span class="text-danger">Manzilni kiriting</span>');
    $("#manzil").focus();
    return false;
  } else if (kurs.trim() == "") {
    $("#sucMsg5").html('<span class="text-danger">Kursni tanlang</span>');
    $("#kurs").focus();
    return false;
  } else if (sana.trim() == "") {
    $("#sucMsg6").html(
      '<span class="text-danger">Tug`ilgan sanani tanlang</span>'
    );
    $("#date").focus();
    return false;
  } else if (qabulSana.trim() == "") {
    $("#sucMsg7").html(
      '<span class="text-danger">Kelgan sanani tanlang</span>'
    );
    $("#appDate").focus();
    return false;
  } else if (stPass.trim() == "") {
    $("#sucMsg8").html('<span class="text-danger">Parol kiritilmadi</span>');
    $("#stpass").focus();
    return false;
  } else if (stPass != stcPass) {
    $("#sucMsg9").html(
      '<span class="text-danger text-right">Parol tasdiqlanmadi</span>'
    );
    $("#stcpass").focus();
    return false;
  } else if (selfId.trim() == "") {
    $("#sucMsg11").html(
      '<span class="text-danger">Passport kiritilmadi</span>'
    );
    $("#selfId").focus();
    return false;
  } else {
    $.ajax({
      type: "POST",
      url: "../../managers/students/addStudent.php",
      dataType: "json",
      data: {
        stName: stName,
        stLastname: stLastname,
        phone: phone,
        manzil: manzil,
        kurs: kurs,
        sana: sana,
        qabulSana: qabulSana,
        stPass: stPass,
        jins: jins,
        selfId: selfId,
      },
      success: function (data) {
        if (data == "OK") {
          console.log(data);
          $("#sucMsg").html(
            '<span class="alert alert-success mx-auto">Tabriklaymiz ro`yhatdan o`tildi!</span>'
            );
            window.location.reload()
            tozalashRegistr();
          } else if (data == "xato") {
          console.log(data);
          $("#sucMsg").html(
            '<span class="alert alert-danger">Ro`yhatdan o`tmadingiz!</span>'
          );
        }
      },
    });
  }
}
function tozalashRegistr() {  
    $('#usRegForm').trigger('reset');
    $('#sucMsg1').html(" ");
    $('#sucMsg2').html(" ");
    $('#sucMsg3').html(" ");
    $('#sucMsg4').html(" ");
    $('#sucMsg5').html(" ");
    $('#sucMsg6').html(" ");
    $('#sucMsg7').html(" ");
    $('#sucMsg8').html(" ");
    $('#sucMsg9').html(" ");
    $('#sucMsg10').html(" ");
    $('#sucMsg11').html(" ");
}

$('tbody').on('click', '#btnEdit', function(){
  let idUp = $(this).attr('data-edit')
  myData = {uid: idUp};
  $.ajax({
    url: '../../managers/students/edit.php',
    method: 'POST',
    dataType: 'json',
    data: JSON.stringify(myData),
    success:function(data){
      $('.updateId').val(data.id)
      $('.infoTitle').val(data.name)
      $('#ename').val(data.name)
      $('#eemail').val(data.surname)
      $('#ephone').val(data.phone)
      $('.selMan select').val(data.address)
      $('.kursE select').val(data.dev_type)
      $('#sanaT').val(data.birthday)
      $('#sanaK').val(data.app_date)
      $('.inpE').val(data.password)
      $('#staticBackdropEdit').modal('show')
      $("#eId").val(data.passport)
    }
  })
})

$('tbody').on('click', '#btnDel', function(){
  let id = $(this).attr('data-sid')

  mydata = {sid: id};
  mythis = this;
  $.ajax({
    url: '/managers/students/delete.php',
    method: "post",
    data: JSON.stringify(mydata),
    success:function(data){
     msg = "<div class='alert alert-danger mt-3'>" + data + "</div>"
     $(mythis).closest('tr').fadeOut(300);
     location.reload()
    }
  })
})

$('tbody').on('click', '#infoUser', function(){
  let id = $(this).attr('data-info')

  $.ajax({
    url: '/managers/students/delete.php',
    method: "post",
    data: {id: id},
    success: function(res){
      $('.infoUser').html(res)
      $('#exampleModalCenter').modal('show')
    }
  })
})

function upStu(){
 let idUp = $('.updateId').val()
 let ism = $('#ename').val()
 let fam = $('#eemail').val()
 let tel = $('#ephone').val()
 let manzilU = $('.selMan select').val()
 let kursU = $('.kursE select').val()
 let sanaT = $('#sanaT').val()
 let sanaK = $('#sanaK').val()
 let parol = $('#stUpass').val()
 let parolT = $('#stcUpass').val()
 let passport = $('#eId').val()
 let gender =  $("input[name=gender]:checked").val()

 if (ism.trim() == "") {
  $("#sucMsg20").html(
    '<span class="text-danger text-right">Ism ?</span>'
  );
  $("#ename").focus();
  return false;
} else if (fam.trim() == "") {
  $("#sucMsg21").html('<span class="text-danger">Familiya ?</span>');
  $("#eemail").focus();
  return false;
} else if (tel.trim() == "") {
  $("#sucMsg22").html('<span class="text-danger">Telefon ?</span>');
  $("#ephone").focus();
  return false;
} else if (manzilU.trim() == "") {
  $("#sucMsg23").html('<span class="text-danger">Manzil ?</span>');
  $(".selMan select").focus();
  return false;
} else if (kursU.trim() == "") {
  $("#sucMsg24").html('<span class="text-danger">Kursni tanlang</span>');
  $(".kursE select").focus();
  return false;
} else if (sanaT.trim() == "") {
  $("#sanaT").focus();
  $("#sucMsg25").html(
    '<span class="text-danger">Tug`ilgan sanani tanlang</span>'
  );
  return false;
} else if (sanaK.trim() == "") {
  $("#sucMsg26").html(
    '<span class="text-danger">Kelgan sanani tanlang</span>'
  );
  $("#sanaK").focus();
  return false;
} else if (gender == undefined) {
  $("#sucMsg30").html(
    '<span class="text-danger">tanlanmadi</span>'
  );
  return false;
} else if (parol.trim() == "") {
  $("#sucMsg27").html('<span class="text-danger">Parol kiritilmadi</span>');
  $("#stUpass").focus();
  return false;
} else if (parol != parolT) {
  $("#sucMsg28").html(
    '<span class="text-danger text-right">Parol bir xil emas</span>'
  );
  $("#stcpass").focus();
  return false;
} else if (passport.trim() == "") {
  $("#sucMsg29").html(
    '<span class="text-danger">Passport kiritilmadi</span>'
  );
  $("#eId").focus();
  return false;
} else {
  $.ajax({
    type: "POST",
    url: "../../managers/students/upStu.php",
    dataType: 'json',
    data: {
      idUp: idUp,
      ism: ism,
      fam: fam,
      tel: tel,
      manzilU : manzilU,
      kursU : kursU,
      sanaT : sanaT,
      sanaK : sanaK,
      parol : parol,
      passport : passport,
      gender : gender,
    },
    success: function (data) {
      if (data == "OK") {
        $('#staticBackdropEdit').modal('hide')
        window.location.reload()
        } else if (data == "xato") {
        console.log(data);
      }
    },
  
  
  })
}
}
