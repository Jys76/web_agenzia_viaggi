
let slides = document.getElementsByClassName("slideshow_images");
let index = 0;
let slide_timer

document.addEventListener("DOMContentLoaded", function(){
    show_slide();
})

function show_slide(){

    for(let i = 0; i < slides.length; i++){
        slides[i].style.display = "none";
    }
    slides[index].style.display = "block";
    index ++;

    if(index == slides.length){
        index = 0;
    }
    slide_timer = setTimeout(show_slide, 4000);
}



function show_next_slide(){
    clearTimeout(slide_timer);
    show_slide();
}



function show_prev_slide(){
    clearTimeout(slide_timer);
    if(index == 1){
        index = slides.length - 1;
    }else{
        if(index == 0){
            index = slides.length - 2;
        }else{
            index -= 2;
        }
    }
    show_slide();
}