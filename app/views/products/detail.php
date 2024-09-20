<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>

    <!-- karena kita masih membutuhkan style dari index
    kita dapat memanggilanya dengan cara berikut
    dua titik sebelum nama file menandakan perpindahan folder -->
    <link rel="stylesheet" href="https://localhost/pertemuan_2/public/css/home/index.css">
    <link rel="stylesheet" href="https://localhost/pertemuan_2/public/css/products/detail.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    require_once __DIR__ . "/../layouts/navbar.php";
    ?>
    <div class="container">
        <section id="home_article">
            <article>
                <h1 id="title"><?php echo $product['title'] ?></h1>
                <p id="description"><?php echo $product['title'] ?></p>
                <p id="price">Rp <?php echo $product['price'] ?></p>
            </article>
            <figure>
                <img src="https://cdn.shopify.com/s/files/1/0070/7032/files/product-label-design.jpg?v=1680902906" id="prod_img" alt="product image">
            </figure>
        </section>
    </div>
    <script src="detail.js"></script>
</body>

</html>