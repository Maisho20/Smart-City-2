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
