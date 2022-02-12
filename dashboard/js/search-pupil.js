const searchInput = document.querySelector('.search_input'),
searchResults = document.querySelectorAll('.search_results'),
searchContent = document.querySelector('.search_content');

document.addEventListener('click', function(e){
    if (searchInput === document.activeElement) {
        searchContent.classList.remove('hidden');
    } else {
        searchContent.classList.add('hidden');  
    }
});

searchInput.addEventListener('input', function(){
    let value = this.value
    if (value.length > 0) {
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "./components/search.php", true);
        xhr.onload = ()=> {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response;
                    searchContent.innerHTML = data;
                }
            }
        }
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("searchTerm=" + value);        
    } else {
        searchContent.innerHTML = "O'quvchi Ismi, familiyasi telefon raqami va Passporti orqali qidiring";
    }
});