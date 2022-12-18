<?php
    include('config.php');
    $fakultas_query = pg_query("SELECT * FROM fakultas");
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
            <section class="reservasi section" id=" ">
                <h2 class="section__title">Tambah Ruangan</h2>
                <span class="section__subtitle">Lengkapi data ruangan</span>

                <div class="reservasi__container container grid">
                    <form action="tambahruangan.php" class="reservasi__form grid" method="post">
                        <div class="reservasi__content">
                            <label for="kode_ruangan" class="reservasi__label">Kode Ruangan</label>
                            <input type="text" name="kode_ruangan" class="reservasi__input">
                        </div>
                        <input type="hidden" value="<?= $ruangan['ruangan_fakultas']?>" name="ruangan_fakultas">

                        <div class="reservasi__content">
                            <label for="ruangan_fakultas" class="reservasi__label">Fakultas Ruangan</label>
                            <select name="ruangan_fakultas" class="reservasi__input" id="">
                                <option value="NULL"></option>
                                <?php while($fakultas = pg_fetch_array($fakultas_query)) {
                                    echo "<option value=".$fakultas['fakultas'].">".$fakultas['fakultas']."</option>";
                                    }
                                ?>
                            </select>  
                        </div>

                        <div class="reservasi__content">
                            <label for="ruangan_nama" class="reservasi__label">Nama Ruangan</label>
                            <input type="text" name="ruangan_nama" class="reservasi__input">
                        </div>

                        <div class="reservasi__content">
                            <label for="ruangan_lokasi" class="reservasi__label">Lokasi Ruangan</label>
                            <input type="text" name="ruangan_lokasi" class="reservasi__input">
                        </div>

                        <div class="reservasi__content">
                            <label for="bisa_dipinjam" class="reservasi__label">Status Peminjaman</label>
                            <div class="reservasi__input">
                                <input type="radio" name="bisa_dipinjam" value="Iya">Bisa dipinjam</input>
                                <input type="radio" name="bisa_dipinjam" value="Tidak">Tidak bisa dipinjam</input>
                            </div>
                        </div>

                        <div class="reservasi__content">
                            <label for="ruangan_kapasitas" class="reservasi__label">Kapasitas</label>
                            <input type="text" name="ruangan_kapasitas" class="reservasi__input">
                        </div>

                        <div>
                        <input type="submit" value="Submit" name="tambahruangan" class="button button--flex"/>
                        </div>
                    </form>
                </div>
            </section>
            </main>

            <script src="main.js"></script>
        </body>
    </html>