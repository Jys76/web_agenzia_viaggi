
<?php
    $sex_query = "SELECT id, name FROM sexx";
    $sex_query_result = execute_query($sex_query);

    $city_query = "SELECT name FROM city";
    $city_query_result = execute_query($city_query);

    function load_sex_data($sex_query_result){
        ob_start();
        while($row = mysqli_fetch_assoc($sex_query_result)): ?>
            <option value="<?= htmlspecialchars($row['id']) ?>"><?= htmlspecialchars($row['name']) ?></option>
        <?php endwhile;
        return ob_get_clean();
    }

    function load_cities_data($city_query_result){
        ob_start();
        while($row = mysqli_fetch_assoc($city_query_result)): ?>
            <option value="<?=htmlspecialchars($row['name'])?>">
        <?php endwhile;
        return ob_get_clean();
    }
    
?>