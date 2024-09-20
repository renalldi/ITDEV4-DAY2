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
    <div class="container">
        <section id="home_article">
            <article>
                <h1>Selamat datang di Website kami, Belanja murah harga pas !</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quos placeat officia illo veniam omnis eos
                    nobis fuga ipsam? Perferendis rem tempora voluptate eos eaque quam alias velit, consequuntur sit?
                </p>
                <button class="bg-red p-2 text-white fw-bold border-radius shadow">Pelajari Lebih Lanjut!</button>
            </article>
            <figure>
                <img src="https://cdn.shopify.com/s/files/1/0070/7032/files/product-label-design.jpg?v=1680902906" alt="home image">
            </figure>
        </section>
        <section id="our_products">
            <center>
                <h1>Our Products</h1>
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
                        </section>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </div>
    <script src="http://localhost/pertemuan_2/public/js/home/index.js"></script>
</body>

</html>