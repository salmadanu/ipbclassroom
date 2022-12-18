<?php
    include('config.php');
    $peminjaman_query = pg_query("SELECT * FROM peminjaman ORDER BY id");

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
                <h2 class="section__title">Daftar Peminjaman Ruangan IPB University</h2>

                <div class="ruangan__content container">
                    <table>
                        <thead>
                            <tr>
                                <th class="ruangan__label">ID Peminjaman</th>
                                <th class="ruangan__label">Kode Ruangan</th>
                                <th class="ruangan__label">Acara</th>
                                <th class="ruangan__label">Penanggung Jawab</th>
                                <th class="ruangan__label">Waktu Mulai</th>
                                <th class="ruangan__label">Waktu Selesai</th>
                                <th class="ruangan__label">Status</th>
                            </tr>

                        </thead>
                        <tbody>
                            <?php 
                                while($peminjaman = pg_fetch_array($peminjaman_query)) {
                            ?> 
                            <tr>
                                <td class="ruangan__data"><?php echo $peminjaman['id']?></td>
                                <td class="ruangan__data"><?php echo $peminjaman['kode_ruangan_peminjaman']?></td>
                                <td class="ruangan__data"><?php echo $peminjaman['nama_acara']?></td>
                                <td class="ruangan__data"><?php echo $peminjaman['notelfon_pj']?></td>
                                <td class="ruangan__data"><?php echo $peminjaman['waktu_mulai']?></td>
                                <td class="ruangan__data"><?php echo $peminjaman['waktu_selesai']?></td>
                                <td class="ruangan__data">
                                    <?php 
                                        $update = $peminjaman['disetujui'];
                                        if ($update == 't') {
                                            echo "Disetujui";
                                        }
                                        elseif ($update == 'f') {
                                            echo "Ditolak";
                                        }
                                    ?>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </section>
            </main>

            <script src="main.js"></script>
        </body>
    </html>