let currentSlide = 0;
let slides = document.getElementsByClassName("slide");
let dotsContainer = document.getElementById("dots-container");
let autoSlide;


for (let i = 0; i < slides.length; i++) {
    let dot = document.createElement("span");
    dot.classList.add("dot");
    dot.setAttribute("onclick", `goToSlide(${i})`);
    dotsContainer.appendChild(dot);
}

let dots = document.getElementsByClassName("dot");


function showSlide(index) {
    if (index >= slides.length) {
        currentSlide = 0;
    } else if (index < 0) {
        currentSlide = slides.length - 1;
    } else {
        currentSlide = index;
    }

    for (let i = 0; i < slides.length; i++) {
        slides[i].classList.remove("active");
        dots[i].classList.remove("active-dot");
    }

    slides[currentSlide].classList.add("active");
    dots[currentSlide].classList.add("active-dot");
}

function changeSlide(step) {
    showSlide(currentSlide + step);
    resetAutoSlide();
}

function goToSlide(index) {
    showSlide(index);
    resetAutoSlide();
}


function startAutoSlide() {
    autoSlide = setInterval(function () {
        showSlide(currentSlide + 1);
    }, 3000);
}


function resetAutoSlide() {
    clearInterval(autoSlide);
    startAutoSlide();
}


showSlide(currentSlide);
startAutoSlide();