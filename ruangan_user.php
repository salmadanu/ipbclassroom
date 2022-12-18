<?php
    include('config.php');
    $ruangan_query = pg_query("SELECT * FROM ruangan WHERE bisa_dipinjam='t' ORDER BY ruangan_fakultas");

    if (isset($_GET['status4'])) {
        print("Penghapusan ruangan gagal!");
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
                <h2 class="section__title">Daftar Ruangan IPB University</h2>

                <div class="ruangan__content container">
                <table>
                <thead>
                <tr>
                    <th class="ruangan__label">Kode Ruangan</th>
                    <th class="ruangan__label">Fakultas</th>
                    <th class="ruangan__label">Nama Ruangan</th>
                    <th class="ruangan__label">Lokasi</th>
                    <th class="ruangan__label">Kapasitas</th>
                    <th class="ruangan__label">Ketersediaan</th>
                </tr>

                </thead>
                <tbody> 
                
                <?php 
                    while($ruangan = pg_fetch_array($ruangan_query)) {
                        ?>
                    <tr>
                        <td class="ruangan__data"><?php echo $ruangan['kode_ruangan']?></td>
                        <td class="ruangan__data"><?php echo $ruangan['ruangan_fakultas']?></td>
                        <td class="ruangan__data"><?php echo $ruangan['ruangan_nama']?></td>
                        <td class="ruangan__data"><?php echo $ruangan['ruangan_lokasi']?></td>
                        <td class="ruangan__data"><?php echo $ruangan['ruangan_kapasitas']?></td>
                        <td class="ruangan__data">
                            <?php 
                                $ketersediaan = $ruangan['bisa_dipinjam'];
                                if ($ketersediaan = 't') {
                                    echo "Iya";
                                }
                                elseif ($ketersediaan == 'f') {
                                    echo "Tidak";
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