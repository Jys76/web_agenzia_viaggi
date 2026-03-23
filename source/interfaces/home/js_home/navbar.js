
const navbar_services = document.getElementById("navbar_services");
const navbar_traver = document.getElementById("navbar_traver");

const services_drop_box = document.getElementById("services_drop_box");
const travel_drop_box = document.getElementById("travel_drop_box");

let drop_box_timer;


function unshow_drop_boxes(){
    clearTimeout(drop_box_timer);
    services_drop_box.style.display = "none";
    travel_drop_box.style.display = "none";
};



/* ============================
    DROP BOX ACTIVATION
============================ */

function show_dropbox(button, drop_box){

    button.addEventListener("mouseenter", ()=>{

        unshow_drop_boxes();
        drop_box.style.display = "flex";

        const button_rect = button.getBoundingClientRect();
        const drop_rect = drop_box.getBoundingClientRect();

        const half_diff = (drop_rect.width - button_rect.width) / 2;

        drop_box.style.left = button_rect.left - half_diff + "px";
    });
}   

function unshow_dropbox(button, drop_box){
    button.addEventListener("mouseleave", () => {
        drop_box_timer = setTimeout(function(){
            drop_box.style.display = "none";
        }, 2000);
    });
}

function drop_box_focus(drop_box){
    drop_box.addEventListener("mouseenter", function(event){
        clearTimeout(drop_box_timer);
    });
}

function drop_box_focus_leave(drop_box){
    drop_box.addEventListener("mouseleave", function(event){
        drop_box_timer = setTimeout(function(){
            drop_box.style.display = "none"
        }, 2000);
    });
}


show_dropbox(navbar_services, services_drop_box);
show_dropbox(navbar_traver, travel_drop_box);

unshow_dropbox(navbar_services, services_drop_box);
unshow_dropbox(navbar_traver, travel_drop_box);

drop_box_focus(services_drop_box);
drop_box_focus(travel_drop_box);

drop_box_focus_leave(services_drop_box);
drop_box_focus_leave(travel_drop_box);
