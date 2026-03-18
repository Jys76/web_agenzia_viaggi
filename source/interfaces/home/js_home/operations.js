const city_input = document.getElementById("search_city_input");
const city_input_dropdown = document.getElementById("city_input_dropdown");

let cities = [];



async function load_cities(get_cities_path){
    const response = await fetch(get_cities_path);
    cities = await response.json();
}


async function operations_init(get_cities_path){

    await load_cities(get_cities_path);

    city_input.addEventListener("input", () => {

        const input_value = city_input.value.toLowerCase();
        city_input_dropdown.innerHTML = "";

        if (!input_value) {
            city_input_dropdown.classList.add("city_input_hidden");
            return;
        }

        const result = cities.filter(city =>
            city.name.toLowerCase().includes(input_value)
        );

        result.forEach(city => {
            const item = document.createElement("div");
            item.textContent = city.name;

            item.addEventListener("click", () => {
                city_input.value = city.name;
                city_input_dropdown.classList.add("city_input_hidden");
            });

            city_input_dropdown.appendChild(item);
        });

        city_input_dropdown.classList.toggle(
            "city_input_hidden",
            result.length === 0
        );

    });

}

