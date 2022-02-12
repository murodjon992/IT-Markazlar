const pupilForm = document.querySelector('.pupil_form'),
submitBtn = document.querySelector('.submit_btn'),
errorAlert = document.querySelector('.error_alert'),
formInputs = document.querySelectorAll('.form-input');

pupilForm.addEventListener('submit', function(e){
    e.preventDefault();
});
submitBtn.addEventListener('click', function(){
    this.disabled = true;
    this.innerHTML = 'Biroz kuting...';
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../components/add-pupil.php", true);
    xhr.onload = ()=> {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if (data == 'success') {
                    this.disabled = false;
                    location.href = "../?page=pupils";
                } else {
                    this.disabled = false;
                    errorAlert.style.display = 'block';
                    errorAlert.innerHTML = data
                    this.innerHTML = 'Tasdiqlash';
                }
            }
        }
    }
    let formData = new FormData(pupilForm);
    xhr.send(formData);
});