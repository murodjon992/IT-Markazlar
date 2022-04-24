const userForm = document.querySelector('.user_login'),
    userSubmitBtn = document.querySelector('.userSubmitBtn'),
    errorInfo = document.querySelector('.errorInfo');

userForm.addEventListener('click', function(e){
    e.preventDefault();
});
userSubmitBtn.addEventListener('click', function(){
    this.disabled = true;
    errorInfo.innerHTML = "Biroz kuting";
    errorInfo.style.display = 'block';
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../ustaBor/user-login.php", true);
    xhr.onload = ()=> {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if (data.includes('success')) {
                    errorInfo.innerHTML = "Muvafaqqiyatli kirildi";
                    location.href = "./dashboard/pages/profile.php"
                } else {
                    errorInfo.innerHTML = data;
                    this.disabled = false;
                }
            }
        }
    }
    let formData = new FormData(userForm);
    xhr.send(formData);
});