var slidedisease = 1;
slideShow(slidedisease);

function disease_slide(n){
    slideShow(slidedisease = n);
}

function slideShow(n){
    var i;
    var slides = document.getElementsByClassName("slide_fade");

    if (n > slides.length){
        slidedisease = 1
    }

    if (n < 1){
        slidedisease = slides.length;
    }

    for (i = 0; i <slides.length; i++){
        slides[i].style.display = "none";
    }

    slides[slidedisease - 1].style.display = "block"
}
