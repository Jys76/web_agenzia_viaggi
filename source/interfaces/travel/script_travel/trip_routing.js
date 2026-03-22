
function load_trips_event_listener(page_url){
    const trip_button = document.querySelectorAll(".trip_element_info_button");

    trip_button.forEach(button => {
        button.addEventListener("click", () => {
            const trip_id = button.dataset.trip_id;
            window.location.href = page_url + "?trip_id=" + trip_id;
        });
    });
}

