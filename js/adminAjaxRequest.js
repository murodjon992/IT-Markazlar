// login verificatsiya
function checkAdminLogin(){
    let adminLogEmail = $('#adminLogEmail').val();
    let adminPass = $('#adminPass').val();
    console.log(adminPass);
    $.ajax({
        type: 'POST',
        url: 'admin/admin.php',
        data: {
            checkLogemail: 'checklogemail',
            adminLogEmail: adminLogEmail,
            adminPass: adminPass
        },
        success:function (data){
          if (data == 0) {
              $('#statusAdminLogMsg').html('<small class="alert alert-danger">Email yoki Parol xato!</small>')
          } else if(data == 1) {
            $('#statusAdminLogMsg').html('<small class="alert alert-success">Biroz Kuting ...</small>');
            setTimeout(() => {
               window.location.href = 'admin/adminDash.php' ;
            }, 1000);
          }
        }
    })
}