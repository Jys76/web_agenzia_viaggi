
const navbar_traver = document.getElementById("navbar_traver");
const travel_drop_box = document.getElementById("travel_drop_box");

let timer;



navbar_traver.addEventListener("mouseenter", function(event){
    clearTimeout(timer)
    timer = setTimeout(()=>{
        travel_drop_box.style.display = "flex";
    }, 200);
});

navbar_traver.addEventListener("mouseleave", function(event){
    timer = setTimeout(function(){
        travel_drop_box.style.display = "none";
    }, 2000);
});




travel_drop_box.addEventListener("mouseenter", function(event){
    clearTimeout(timer);
});

travel_drop_box.addEventListener("mouseleave", function(event){
    timer = setTimeout(function(){
        travel_drop_box.style.display = "none"
    }, 2000);
});
