<?php
    include('config.php');
    $kode_ruangan = $_POST['kode_ruangan'];
    $kode_ruangan_query = pg_query("SELECT * FROM ruangan WHERE kode_ruangan = '$kode_ruangan'");
    $ruangan = pg_fetch_array($kode_ruangan_query);

    $ruangan_query1 = pg_query("SELECT * FROM ruangan");
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
                <h2 class="section__title">Edit Tambah Ruangan</h2>
                <span class="section__subtitle">Lengkapi data ruangan</span>

                <div class="reservasi__container container grid">
                    <form action="editruangan.php" class="reservasi__form grid" method="post">
                        
                        <div class="reservasi__content">
                            <input type="hidden" value="<?= $ruangan['kode_ruangan']?>" name="kode_ruangan">
                            <label for="kode_ruangan" class="reservasi__label">Kode Ruangan</label>
                            <input type="text" name="kode_ruangan" value="<?= $ruangan['kode_ruangan']?>" class="reservasi__input">
                        </div>
                        
                        <div class="reservasi__content">
                            <input type="hidden" value="<?= $ruangan['ruangan_fakultas']?>" name="ruangan_fakultas">
                            <label for="ruangan_fakultas" class="reservasi__label">Fakultas Ruangan</label>
                            <select name="ruangan_fakultas" class="reservasi__input" id="">
                                <option value=""></option>
                                <?php while($fakultas = pg_fetch_array($fakultas_query)) {
                                    echo "<option value=".$fakultas['fakultas'].">".$fakultas['fakultas']."</option>";
                                    }
                                ?>
                            </select>  
                        </div>

                        <div class="reservasi__content">
                            <input type="hidden" value="<?= $ruangan['ruangan_nama']?>" name="ruangan_nama">
                            <label for="ruangan_nama" class="reservasi__label">Nama Ruangan</label>
                            <input type="text" name="ruangan_nama" value="<?= $ruangan['ruangan_nama']?>" class="reservasi__input">
                        </div>

                        <div class="reservasi__content">
                            <input type="hidden" value="<?= $ruangan['ruangan_lokasi']?>" name="ruangan_lokasi">
                            <label for="ruangan_lokasi" class="reservasi__label">Lokasi Ruangan</label>
                            <input type="text" name="ruangan_lokasi" value="<?= $ruangan['ruangan_lokasi']?>" class="reservasi__input">
                        </div>

                        <div class="reservasi__content">
                            <label for="bisa_dipinjam" class="reservasi__label">Status Peminjaman</label>
                            <div class="reservasi__input">
                            <?php
                                if ($ruangan['bisa_dipinjam']=='t') {
                            ?>
                                <input type="radio" name="bisa_dipinjam" value="Iya" checked>Iya</input>
                                <input type="radio" name="bisa_dipinjam" value="Tidak">Tidak</input>
                            <?php
                            }   
                                elseif ($ruangan['bisa_dipinjam']=='f'){
                            ?>
                                <input type="radio" name="bisa_dipinjam" value="Iya" >Iya</input>
                                <input type="radio" name="bisa_dipinjam" value="Tidak" checked>Tidak</input>
                            <?php
                            }
                            ?>
                            </div>
                        </div>

                        <div class="reservasi__content">
                            <label for="ruangan_kapasitas" class="reservasi__label">Kapasitas</label>
                            <input type="text" name="ruangan_kapasitas" value="<?= $ruangan['ruangan_kapasitas']?>" class="reservasi__input">
                        </div>

                        <div>
                        <input type="submit" class="button button--flex" value="Edit" name="editruangan" />
                        </a>
                        </div>
                    </form>
                </div>
            </section>
            </main>

            <script src="main.js"></script>
        </body>
    </html>