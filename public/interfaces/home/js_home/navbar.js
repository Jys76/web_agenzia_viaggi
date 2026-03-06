
const navbar_traver = document.getElementById("navbar_traver");
const navbar_offers = document.getElementById("navbar_offers");

const travel_drop_box = document.getElementById("travel_drop_box");
const offers_drop_box = document.getElementById("offers_drop_box");

let drop_box_timer;


function unshow_drop_boxes(){
    clearTimeout(drop_box_timer);
    document.getElementById("travel_drop_box").style.display = "none";
    document.getElementById("offers_drop_box").style.display = "none";
};



/* ============================
    DROP BOX ACTIVATION
============================ */

navbar_traver.addEventListener("mouseenter", function(event){

    unshow_drop_boxes();
    travel_drop_box.style.display = "flex";

    const button_rect = navbar_traver.getBoundingClientRect();
    const drop_rect = travel_drop_box.getBoundingClientRect();

    const half_diff = (drop_rect.width - button_rect.width) / 2;

    travel_drop_box.style.left = button_rect.left - half_diff + "px";
});

navbar_offers.addEventListener("mouseenter", function(event){
    unshow_drop_boxes();
    offers_drop_box.style.display = "flex";

    const button_rect = navbar_offers.getBoundingClientRect();
    const drop_rect = offers_drop_box.getBoundingClientRect();

    const half_diff = (drop_rect.width - button_rect.width) / 2;
    
    offers_drop_box.style.left = button_rect.left - half_diff + "px";
});





/* ============================
    DROP BOX DEACTIVATION
============================ */

navbar_traver.addEventListener("mouseleave", function(event){
    drop_box_timer = setTimeout(function(){
        travel_drop_box.style.display = "none";
    }, 2000);
});

navbar_offers.addEventListener("mouseleave", function(event){
    drop_box_timer = setTimeout(()=>{
        offers_drop_box.style.display = "none";
    }, 2000);
});




/* ============================
    DROP BOX FOCUS
============================ */

travel_drop_box.addEventListener("mouseenter", function(event){
    clearTimeout(drop_box_timer);
});

offers_drop_box.addEventListener("mouseenter", function(event){
    clearTimeout(drop_box_timer);
});



/* ============================
    DROP BOX FOCUS LEAVE
============================ */

travel_drop_box.addEventListener("mouseleave", function(event){
    drop_box_timer = setTimeout(function(){
        travel_drop_box.style.display = "none"
    }, 2000);
});

offers_drop_box.addEventListener("mouseleave", function(event){
    drop_box_timer = setTimeout(()=>{
        offers_drop_box.style.display = "none";
    }, 2000);
});



