<?php
include("config.php");
    if( isset($_POST['loginadmin'])) {

        $username = $_POST['admins_username'];
        $password = $_POST['admins_password'];

        $username_query = pg_query("SELECT * FROM admins WHERE admins_username='$username'");

        //cek username
        if( pg_num_rows($username_query) === 1 ) {
            //cek password
            $row = pg_fetch_array($username_query);
            if (password_verify($password, $row['admins_password'])) {
                header("Location: index_admin.php");
                exit;
            }

            $error = true;
        }
        var_dump($username);
        var_dump($password);
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
                    <h2 class="section__title">Login as Admin</h2>
                    <div>
                        <?php if (isset($error)) : ?>
                        <p style="color: red; font-style: italic;">username / password salah!</p>

                        <?php endif; ?>

                        <form action="" method="post">
                        <div class="index__container grid">
                            <div class="index__content">
                                <label for="admins_username"></label>
                                <input type="text" name="admins_username" class="login__input" id="admins_username" placeholder="Username">
                            </div>
                            <div class="index__content">
                                <label for="admins_password"></label>
                                <input type="password" name="admins_password" class="login__input" id="admins_password" placeholder="Password">
                            </div>
                            <div class="index__content">
                                <input type="submit" value="Login" name="loginadmin" class="button button--flex"/>
                            </div>
                        </div>
                        </form>
                    </div>
                </section>
            </main>
            <script src="main.js"></script>
        </body>
    </html>