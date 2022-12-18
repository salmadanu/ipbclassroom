<?php
    include('config.php');
    $id = $_POST['id'];
    $id_peminjaman_query = pg_query("SELECT * FROM peminjaman WHERE id = $id");
    $peminjaman = pg_fetch_array($id_peminjaman_query);
    if (isset($_GET['statusupdate2'])) {
        print("Update status peminjaman gagal!");
    }
?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <!--==================== UNICONS ====================-->
            <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        
            <!--==================== CSS ====================-->
            <link rel="stylesheet" href="asset/stylesheet.css">

            <title>IPB Classroom</title>
        </head>
        <body>
            <!--==================== HEADER ====================-->
            <header class="header" id="header">
                <nav class="nav container">
                    <a href="#" class="nav__logo">IPB Classroom</a>
                </nav>
            </header>

            <!--==================== MAIN ====================-->
            <main class="main">
                <section class="section" id=" ">
                    <h2 class="section__title">Update Persetujuan Peminjaman</h2>
                    <span class="section__subtitle">Apakah peminjaman disetujui?</span>

                    <form action="updatestatuspeminjaman.php" method="post">
                        <input type="hidden" value="<?= $peminjaman['id']?>" name="id">
                            <label for="disetujui"></label>
                            <div class="index__container grid">
                                <div class="index__content">
                                    <input type="submit" name="disetujui-iya" value="Iya" class="button login__button"></input>
                                </div>
                                <div class="index__content">
                                    <input type="submit" name="disetujui-tidak" value="Tidak" class="button login__button"></input>
                                </div>
                            </div>
                    </form>
                    <?php
                    ?>
                </section>
            </main>
            <script src="main.js"></script>
        </body>
    </html>