

const rom_selector = document.getElementById("num_roms_select");

rom_selector.addEventListener("change", ()=>{
    const selected_option = rom_selector.options[rom_selector.selectedIndex];
    
    const status = document.getElementById("status_td");
    const rom_num = document.getElementById('num_beds_td');
    const descr = document.getElementById('descr_td');
    
    status.textContent = selected_option.getAttribute("data-status") != null ? selected_option.getAttribute("data-status") : "Vuoto";
    rom_num.textContent = selected_option.getAttribute("data-rom_num") != null ? selected_option.getAttribute("data-rom_num") : "Vuoto";
    descr.textContent = selected_option.getAttribute("data-descr") != null ? selected_option.getAttribute("data-descr") : "Vuoto";
})