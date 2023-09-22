<?php

require_once __DIR__ . "/classes/cats.php";
require_once __DIR__ . "/classes/dogs.php";
require_once __DIR__ . "/classes/petFood.php";
require_once __DIR__ . "/classes/petKennels.php";
require_once __DIR__ . "/classes/petToys.php";
require_once __DIR__ . "/classes/products.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FontAwesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Vue.js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- CSS link -->
    <link rel="stylesheet" href="">

    <!-- Title -->

    <title>PHP-OOP-1</title>

</head>

<body>
<header>
        <div class="container text-center">
            <h1 class="display-1 mt-5 fw-semibold">Pet Shop</h1>
        </div>
    </header>
    <main>
        <div class="container mt-5 pb-5">
            <div class="row row-cols-3 g-5">
                <?php foreach ($productList as $product) { ?>
                    <div class="col text-center">
                        <div class="card h-100 rounded-4">
                            <img src="<?php echo $productList->getImg() ?>" class="card-img-top rounded-4" alt="...">
                            <div class="card-body d-flex flex-column">
                                <small> <strong>Specie:</strong> <?php echo $productList->getCategory() ?></small>
                                <h5 class="card-title mt-3"><?php echo $productList->getName() ?></h5>
                                <p class="card-text mt-auto"> <strong>Price: </strong> <?php echo $productList->getPrice() ?> €</p>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </main>
</body>

</html>