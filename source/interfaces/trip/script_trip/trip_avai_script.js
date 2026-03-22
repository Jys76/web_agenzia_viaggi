
const trip_avai_id_input = document.getElementById("trip_avai_id_input");

const num_roms_select = document.getElementById("num_roms_select");

document.querySelectorAll(".trip_avai_table_selector").forEach(selector => {

    selector.addEventListener("click", function() {

        if(this.textContent == "[Selezionato]"){
            this.parentElement.classList.remove('trip_avai_selected_row');
            this.classList.remove('trip_avai_table_select_selected');
            this.textContent = "[Seleziona]";
            trip_avai_id_input.value = "";
            return;
        }

        document.querySelectorAll(".trip_avai_row").forEach(rows => {
            rows.classList.remove('trip_avai_selected_row');
        });

        document.querySelectorAll(".trip_avai_table_selector").forEach(selec => {
            selec.classList.remove('trip_avai_table_select_selected');
            selec.textContent = "[Seleziona]";
        });

        this.parentElement.classList.add('trip_avai_selected_row');
        this.classList.add('trip_avai_table_select_selected');
        this.textContent = "[Selezionato]";

        trip_avai_id_input.value = this.getAttribute("data-trip_avai_id");
    });

});