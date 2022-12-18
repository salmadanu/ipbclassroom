<?php
include("config.php");
    if( isset($_POST['login'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        $username_query = pg_query("SELECT * FROM users WHERE users_username='$username'");

        //cek username
        if( pg_num_rows($username_query) === 1 ) {
            //cek password
            $row = pg_fetch_array($username_query);
            if (password_verify($password, $row['users_password'])) {
                header("Location: index_user.php");
                exit;
            }
        }

        $error = true;
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
                    <h2 class="section__title">Login as User</h2>

                    <div>
                        <?php if (isset($error)) : ?>
                            <p style="color: red; font-style: italic;">username / password salah!</p>

                            <?php endif; ?>

                        <form action="" method="post">
                        <div class="index__container grid">
                            <div class="index__content">
                                <label for="username"></label>
                                <input type="text" name="username" class="login__input" id="username" placeholder="Username">
                            </div>
                            <div class="index__content">
                                <label for="password"></label>
                                <input type="password" name="password" class="login__input" id="password" placeholder="Password">
                            </div>
                            <div class="index__content">
                                <input type="submit" value="Login" name="login" class="button button--flex"/>
                             </div>
                        </div>
                        </form>
                    </div>
                </section>
            </main>
            <script src="main.js"></script>
        </body>
    </html>