<?php
    include('config.php');

    if (isset($_GET['status'])) {
        print("Registrasi user gagal!");
    }

?>

<!DOCTYPE html>
    <html lang="en">   
    <form action="registrasi.php" method="post">
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
                <h2 class="section__title">Sign Up</h2>
                <span class="section__subtitle">Lengkapi data diri untuk Sign Up</span>

                <div class="container grid">
                    <form action="" class="reservasi__form grid" method="post">
                        <div class="reservasi__content">
                            <label for="nama" class="reservasi__label">Nama Lengkap</label>
                            <input type="text" name="nama" class="reservasi__input" id="nama">
                        </div>

                        <div class="reservasi__content">
                            <label for="nim" class="reservasi__label">NIM</label>
                            <input type="text" name="nim" class="reservasi__input" id="nim">
                        </div>

                        <div class="reservasi__content">
                            <label for="users_username" class="reservasi__label">Username</label>
                            <input type="text" name="users_username" id="users_username" class="reservasi__input">
                        </div>

                        <div class="reservasi__content">
                            <label for="users_password" class="reservasi__label">Password</label>
                            <input type="password" name="users_password" id="users_password" class="reservasi__input">
                        </div>

                        <div class="reservasi__content">
                            <label for="users_password2" class="reservasi__label">Konfirmasi password</label>
                            <input type="password" name="users_password2" id="users_password2" class="reservasi__input">
                        </div>

                        <div>
                            <input type="submit" value="Register" name="register" class="button button--flex" />
                        </div>
                    </form>
                </div>
            </section>
            </main>

            <script src="main.js"></script>
        </body>
    </html>