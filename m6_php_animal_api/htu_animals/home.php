<?php require './header.php';


for ($i=0; $i < 20; $i++) { 

    $one_animal = file_get_contents('https://zoo-animal-api.herokuapp.com/animals/rand');
    $animals[]= json_decode($one_animal);
    
}

// rewrite the animals.json file with the new updated information.

$json_animals = json_encode($animals);
file_put_contents('./api_data/animals.json', ($json_animals));
$animals = json_decode(file_get_contents('./api_data/animals.json'));

?>
<main class="container my-5">

    <h1 class="text-center">Wild Animals</h1>
    <hr class="w-50 m-auto">

    <div id="htu-animals" class="mt-5 row">

        <?php foreach ($animals as $animal) :
        ?>
            <div class="htu-card-wrapper col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
                <div class="card">
                    <img src="<?= $animal->image_link ?>" class="card-img-top" alt="PHP">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= $animal->name ?>
                        </h5>
                        <p class="card-text">
                            <?= $animal->habitat ?>
                        </p>
                        <a href="./animal.php?id=<?= $animal->id ?>" class="btn btn-primary">Check animal</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</main>
<?php require './footer.php';
?>