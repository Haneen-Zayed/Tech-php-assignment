<?php include './header.php';
$animal_id = isset($_GET['id']) ? $_GET['id'] : null;

if (!empty($animal_id)) :
    $animals = json_decode(file_get_contents('./api_data/animals.json'));
    $animals_arr = array_filter($animals, function ($item) use ($animal_id) {
        return $item->id == $animal_id;
    });
    $animal = !empty($animals_arr) ? $animals_arr[array_key_first($animals_arr)] : null;
    if (empty($animal))
        die('you are trying to access a animal that is not existed');
?>
    <div class="container my-5 py-5">
        <div class="row">
            <div class="col">
                <img src="<?= $animal->image_link ?>" class="img-thumbnail" alt="animal">
            </div>
            <div class="col">
                <h2>Name: <?= $animal->name ?></h2>
                <p>Latin name: <?= $animal->latin_name ?></p>
                <p>Animal type: <?= $animal->animal_type ?></p>
                <p>Lifespan: <?= $animal->lifespan ?></p>
                <p>Geo range: <?= $animal->geo_range ?></p>
                <p>Habitat: <?= $animal->habitat ?></p>
                <p>Diet: <?= $animal->diet ?></p>
            </div>
        </div>
    </div>
<?php

else :
    echo "There is no animal with this id, or id is empty";
endif;
include './footer.php'; ?>