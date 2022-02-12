const submitBtn = document.querySelector('.submit_btn');
const pupilId = document.querySelector('.submit_btn');
const deleteBtn = document.querySelectorAll('.deleteBtn');

for (let i = 0; i < deleteBtn.length; i++) {
    deleteBtn[i].addEventListener('click', function(){
        submitBtn.value = this.value;
    });
}
submitBtn.addEventListener('click', function(){
    console.log(this.value);
    this.disabled = true;
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "./components/delete-pupil.php", true);
    xhr.onload = ()=> {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if (data == 'success') {
                    this.disabled = false;
                    location.href = "./?page=pupils";
                } else {
                    this.disabled = false;
                }
            }
        }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("id=" + this.value);
});