<?php 
    include('config.php');
    $ruangan_query = pg_query("SELECT * FROM ruangan where bisa_dipinjam = 't'");
    $ruangan_query1 = pg_query("SELECT * FROM ruangan where bisa_dipinjam = 't'");
    $ruangan_query2 = pg_query("SELECT * FROM ruangan where bisa_dipinjam = 't'");
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

                    <div class="nav__menu" id="nav-menu">
                        <ul class="nav__list grid">
                        <li>
                                <a href="index_user.php" class="nav__link">Home</a>
                            </li>

                            <li>
                                <a href="reservasi_user.php" class="nav__link">Reservation</a>
                            </li>

                            <li>
                                <a href="history_user.php" class="nav__link">History</a>
                            </li>

                            <li>
                                <a href="ruangan_user.php" class="nav__link">Classroom</a>
                            </li>
                            
                            <li>
                                <a href="index.php" class="nav__link">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
             <!--==================== MAIN ====================-->
            <main class="main">
            <section class="reservasi section" id=" ">
                <h2 class="section__title">Pemesanan Ruangan</h2>
                <span class="section__subtitle">Lengkapi informasi terkait acara untuk melakukan reservasi ruangan</span>

                <div class="reservasi__container container grid">
                    <form action="peminjaman.php" class="reservasi__form grid" method="post">
                        <div class="reservasi__content">
                            <label for="nama_acara" class="reservasi__label">Nama Acara</label>
                            <input type="text" name="nama_acara" class="reservasi__input">
                        </div>

                        <div class="reservasi__content">
                            <label for="ruangan_fakultas" class="reservasi__label">Fakultas Ruangan</label>
                            <select name="ruangan_fakultas" class="reservasi__input" id="">
                                <option value=""></option>
                                    <?php 
                                        while($ruangan_fakultas = pg_fetch_array($ruangan_query1)) {
                                        echo "<option value='".$ruangan_fakultas['ruangan_fakultas']."'>".$ruangan_fakultas['ruangan_fakultas']."</option>";
                                    }
                                    ?>
                            </select>  
                        </div>

                        <div class="reservasi__content">
                            <label for="kode_ruangan" class="reservasi__label">Kode Ruangan</label>
                            <select name="kode_ruangan" class="reservasi__input" id="">
                                <option value=""></option>
                                    <?php 
                                        while($kode_ruangan = pg_fetch_array($ruangan_query2)) {
                                        echo "<option value='".$kode_ruangan['kode_ruangan']."'>".$kode_ruangan['kode_ruangan']."</option>";
                                     }
                                     ?>
                            </select>
                        </div>

                        
                        <div class="reservasi__content">
                            <label for="waktu_mulai" class="reservasi__label">Waktu mulai</label>
                            <input type="datetime-local" name="waktu_mulai" class="reservasi__input">
                        </div>

                        <div class="reservasi__content">
                            <label for="waktu_selesai" class="reservasi__label">Waktu mulai</label>
                            <input type="datetime-local" name="waktu_selesai" class="reservasi__input">
                        </div>
                        
                        <div class="reservasi__content">
                            <label for="notelfon_pj" class="reservasi__label">Kontak Peanggungjawab</label>
                            <input type="text" name="notelfon_pj" class="reservasi__input" placeholder="No Telfon/WhatssApp(08xxxxxxxxxxx)">
                        </div>

                        <div>
                        <input type="Submit" class="button button--flex" name="pinjamruangan" />
                        </div>
                    </form>
                </div>
            </section>
            </main>

            <script src="main.js"></script>
        </body>
    </html>