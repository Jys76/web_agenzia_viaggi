
const sex_box = document.getElementById("sex_box");
const sex_dropdown = document.getElementById("sex_dropdown");

const sex_option = document.querySelectorAll(".sex_option");

const input_sex_input = document.getElementById("input_sex_input");

sex_box.addEventListener("click", (e)=>{
    e.stopPropagation();
    
    if(sex_dropdown.style.display === "block"){
        sex_dropdown.style.display = "none";
        return
    } 
    sex_dropdown.style.display = "block";
    
});

document.addEventListener("click", ()=>{
    sex_dropdown.style.display = "none";
});

sex_option.forEach(option => {
    option.addEventListener("click", function(){
        input_sex_input.value = this.getAttribute("data-sex_id");
        sex_box.textContent = this.textContent;
        sex_box.style.color = "white";
    });
});