let slideIndex = 0;
showSlides();

function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 2000);
}

$('.multiple-items').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3
});

//=====================================================
/* lấy phần tử modal */
var modal = document.getElementById("myModal");
/* thiết lập nút mở modal */
var btn = document.getElementById("myBtn");
/* thiết lập nút đóng modal */
var span = document.getElementsByClassName("close")[0];
/* Sẽ hiển thị modal khi người dùng click vào */
btn.onclick = function () {
    modal.style.display = "block";
}
/* Sẽ đóng modal khi nhấn dấu x */
span.onclick = function () {
    modal.style.display = "none";
}
/*Sẽ đóng modal khi nhấp ra ngoài màn hình*/
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
//===============================================
const togglePassword = document.querySelector("#togglePassword");
const password = document.querySelector("#password");

togglePassword.addEventListener("click", function () {
    // toggle the type attribute
    const type = password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);

    // toggle the icon
    this.classList.toggle("bi-eye");
});

// prevent form submit
const form = document.querySelector("form");
form.addEventListener('submit', function (e) {
    e.preventDefault();
});
