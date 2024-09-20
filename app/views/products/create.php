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
    <link rel="stylesheet" href="https://localhost/pertemuan_2/public/css/products/create.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    require_once __DIR__ . "/../layouts/navbar.php";
    ?>
    <div class="container">
        <center>
            <h1>Tambah Produk</h1>
        </center>
        <form action="http://localhost/pertemuan_2/public/product/store" method="post">
            <div class="d-flex justify-content-center">
                <div class="card card-form">
                    <div class="form-field">
                        <b>Judul</b>
                        <br>
                        <input type="text" name="title">
                    </div>
                    <div class="form-field">
                        <b>Deskripsi</b>
                        <br>
                        <input type="text" name="description">
                    </div>
                    <div class="form-field">
                        <b>Harga</b>
                        <br>
                        <input type="number" name="price">
                    </div>
                    <div class="form-field">
                        <button class="bg-blue p-2 text-white fw-bold border-radius shadow" style="margin-top: 10px;" type="submit">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="detail.js"></script>
</body>

</html>