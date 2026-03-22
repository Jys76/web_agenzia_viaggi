

document.getElementById("trips_submit").addEventListener("click", ()=>{ 
    const trip_avai_id_input = document.getElementById("trip_avai_id_input");
    const roms_id_input = document.getElementById("roms_id_input");
    console.log(trip_avai_id_input.value + " " + roms_id_input.value);

    if(trip_avai_id_input.value != "" && roms_id_input.value != ""){
        document.getElementById("trip_pren_submit").click();
    }
    else{
        const message = document.getElementById("trips_submit_message");
        message.textContent = "Seleziona tutti i dati";
        setTimeout(function(){
            message.textContent = "";
        }, 5000);
    }
    
});