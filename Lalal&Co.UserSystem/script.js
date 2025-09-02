function showForm (formId){
    document.querySelectorAll(".form-box").forEach(form => form.classList.remove("active"));
    document.getElementById(formId).classList.add("active");
}
function block_backround(login) {
    document.querySelector('.overlay').style.display = 'block';
}

