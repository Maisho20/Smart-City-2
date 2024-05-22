let slieIndex = 0;
showSlides();

function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slieIndex++;
    if (slieIndex > slides.length) {
        slieIndex = 1;
    }

    slides[slieIndex - 1].style.display = "block";
    setTimeout(showSlides, 5000); // Change image every 2 seconds
}

let slideIndex = 0;
showSlide2();

function showSlide2() {
    let x;
    let slide = document.getElementsByClassName("mySlides-2");
    for (x = 0; x < slide.length; x++) {
        slide[x].style.display = "none";
    }

    slideIndex++;
    if (slideIndex > slide.length) {
        slideIndex = 1;
    }

    slide[slideIndex - 1].style.display = "block";
    setTimeout(showSlide2, 5000); // Change image every 2 seconds
}
