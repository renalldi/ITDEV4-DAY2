<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://localhost/pertemuan_2/public/css/home/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- ini untuk navbar -->
    <?php
    require_once __DIR__ . "/../layouts/navbar.php";
    ?>
    <section id="our_products">
        <center>
            <h1>Our Products</h1>
        </center>

        <center style="margin-bottom: 30px;">
            <a href="http://localhost/pertemuan_2/public/product/create">
                <button class="bg-blue p-2 text-white fw-bold border-radius shadow"> Tambah Product</button>
            </a>
        </center>

        <div id="product_container">
            <?php foreach ($products as $key => $value) : ?>
                <div class="card">
                    <div class="card-img">
                        <img src="https://cdn.shopify.com/s/files/1/0070/7032/files/product-label-design.jpg?v=1680902906" alt="img product">
                    </div>
                    <section>
                        <header>
                            <p class="fw-bold"><?php echo $value['title'] ?></p>
                        </header>
                        <p><?php echo $value['description'] ?></p>
                        <p>Rp <?php echo $value['price'] ?></p>

                        <a href="http://localhost/pertemuan_2/public/product/detail/<?php echo $value['id']; ?>">
                            <button class="bg-blue p-2 text-white fw-bold border-radius shadow">detail</button>
                        </a>
                        <a href="http://localhost/pertemuan_2/public/product/edit/<?php echo $value['id']; ?>">
                            <button class="bg-blue p-2 text-white fw-bold border-radius shadow">edit</button>
                        </a>
                        <a href="http://localhost/pertemuan_2/public/product/delete/<?php echo $value['id']; ?>">
                            <button class="bg-blue p-2 text-white fw-bold border-radius shadow">delete</button>
                        </a>
                    </section>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <script src="index.js"></script>
</body>

</html>