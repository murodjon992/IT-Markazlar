$(document).ready(function(){
    $('#stemail').on('keypress blur', function(){
        let reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        let usEmail = $('#stemail').val();
        $.ajax({
            url: 'ustaBor/ustaAdd.php',
            type: 'POST',
            data: {
                checkemail: 'checkmail',
                usEmail: usEmail,
            },
            success: function (data){
                if (data != 0) {
                    $('#sucMsg2').html('<span class="text-danger">Bu Email allaqachon ro`yhatdan o`tgan</span>');
                    $('#signUp').attr('disabled', true);
                } else if(data == 0 && reg.test(usEmail)){
                    $('#sucMsg2').html('<span class="text-success">Bu Email bilan davom etish mumkin</span>');
                    $('#signUp').attr('disabled', false);
                } else if(!reg.test(usEmail)) {
                    $('#sucMsg2').html('<span class="text-danger">Iltimos email kiriting (namuna@gmail.com)</span>');
                    $('#signUp').attr('disabled', false);
                }
                if(usEmail == ""){
                    $('#sucMsg2').html('<span class="text-danger">Iltimos email kiriting</span>');
                }
            },
        });
    });
});


function addStu(){
    let reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    let stName =  $('#stuname').val()
    let stEmail =  $('#stemail').val()
    let stPass =  $('#stpass').val()
    let stcPass =  $('#stcpass').val()


    if (stName.trim() == "") {
        $('#sucMsg1').html('<span class="text-danger text-right">Iltimos ism kiriting</span>');
        $('#stuname').focus();
        return false;
    } else if (stEmail.trim() == "") {
        $('#sucMsg2').html('<span class="text-danger">Iltimos email kiriting</span>');
        $('#stemail').focus();
        return false;
    } else if(stEmail.trim() != "" && !reg.test(stEmail) ){
        $('#sucMsg2').html('<span class="text-danger">Iltimos email kiriting (namuna@gmail.com)</span>');
        $('#stemail').focus();
        return false;
    } else if (stPass.trim() == "") {
        $('#sucMsg3').html('<span class="text-danger">Iltimos parol kiriting</span>');
        $('#stpass').focus();
        return false;
    } else if (stPass != stcPass) {
        $('#sucMsg4').html('<span class="text-danger text-right">Parollar bir xil emas!</span>');
        $('#stpass').focus();
        return false;
    } else {
        $.ajax({
        type: 'POST',
        url: 'ustaBor/ustaAdd.php',
        dataType: 'json',
        data: {
            stuSignUp: "stuSignUp",
           stName : stName,
           stEmail : stEmail,
           stPass : stPass,

        },
        success:function (data) {
            if (data == 'OK') {
                $('#sucMsg').html('<span class="alert alert-success mx-auto">Tabriklaymiz ro`yhatdan o`tdingiz!</span>')
                tozalashRegistr();
            } else if(data == 'xato'){
                $('#sucMsg').html('<span class="alert alert-danger">Ro`yhatdan o`tmadingiz!</span>')

            }
          }
    })
}
}


function tozalashRegistr() {  
    $('#usRegForm').trigger('reset');
    $('#sucMsg1').html(" ");
    $('#sucMsg2').html(" ");
    $('#sucMsg3').html(" ");
    $('#sucMsg4').html(" ");
}

// login verificatsiya
function checkLogin(){
    let usLogEmail = $('#usLogEmail').val();
    let usPass = $('#usPass').val();
    $.ajax({
        type: 'POST',
        url: 'ustaBor/ustaAdd.php',
        data: {
            checkLogemail: 'checklogemail',
            usLogEmail: usLogEmail,
            usPass: usPass
        },
        success:function (data){
          if (data == 0) {
              $('#statusLogMsg').html('<small class="alert alert-danger">Email yoki Parol xato!</small>')
          } else if(data == 1) {
            $('#statusLogMsg').html('<div class="spinner-border text-success" role="status"></div>');
            setTimeout(() => {
               window.location.href = 'dashboard/' ;
            }, 1000);
          }
        }
    })
}