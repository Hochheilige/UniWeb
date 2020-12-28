let images = document.querySelectorAll('.infinity-slider img');
let current = 0;

function slider() {
    for (let i = 0; i < images.length; ++i) {
        console.log("wanished");
        images[i].classList.add('opacity0');
    }
    images[current].classList.remove('opacity0');
    

}

slider();

//document.querySelector('.infinity-slider').onclick = slider;
document.querySelector('.btn-infinity-left').onclick = function() {
    if (current - 1 == -1){
        current = images.length - 1;
    } else {
        --current;
    }
    slider();
};

document.querySelector('.btn-infinity-right').onclick = function() {
    if (current + 1 == images.length){
        current = 0;
    } else {
        ++current;
    }
    slider();
};
