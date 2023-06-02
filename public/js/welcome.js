// Slide show

// let slideIndex = 1;
// showSlides(slideIndex);

// // next/prev control
// function plusSlides(n) {
//     showSlides((slideIndex += n));
// }

// // thumbnail image control
// function currentSlide(n) {
//     showSlides((slideIndex = n));
// }

// function showSlides(n) {
//     let i;
//     let slides = document.getElementsByClassName("mySlides");
//     let dots = document.getElementsByClassName("dot");
//     if (n > slides.length) {
//         slideIndex = 1;
//     }
//     for (i = 0; i < slides.length; i++) {
//         slides[i].style.display = "none";
//     }
//     for (i = 0; i < dots.length; i++) {
//         dots[i].className = dots[i].className.replace("active", "");
//     }
//     slides[slideIndex - 1].style.display = "block";
//     dots[slideIndex - 1].className += " active";
// }

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
        slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 15000); // Change image every 2 seconds
}

// End slideshow

// function btn top

let myButton = document.getElementById("btnTop");
window.onscroll = function () {
    scrollFunction();
};
function scrollFunction() {
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        myButton.style.display = "block";
    } else {
        myButton.style.display = "none";
    }
}
// when user click on btn its goes up
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}