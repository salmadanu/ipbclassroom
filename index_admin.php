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
                                <a href="index_admin.php" class="nav__link">Home</a>
                            </li>

                            <li>
                                <a href="reservasi_admin.php" class="nav__link">Reservation</a>
                            </li>

                            <li>
                                <a href="ruangan_admin.php" class="nav__link">Classroom</a>
                            </li>

                            <li>
                                <a href="index.php" class="nav__link">Log Out
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--==================== HOME ====================-->
            <section class="section" id=" ">
                <div class="home__container container">
                    <div class="home__content grid">
                        <div class="home__img">
                            <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <mask id="mask0" mask-type="alpha">
                                    <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                    130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                    97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                    0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                                </mask>
                                <g mask="url(#mask0)">
                                    <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                    165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                                    129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                    -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                                    
                                    <image class="home__blob-img" x='-70' y='0' href="asset/ipb.jpg"/>
                                </g>
                            </svg>
                        </div>

                        <div class="home__data">
                            <h1 class="home__title">IPB Classroom</h1>
                            <h3 class="home__subtitle">Reservasi Ruang Kelas IPB University</h3>
                            <p class="home__description">IPB Classroom dapat membantu mahasiswa dalam reservasi ruang kelas yang ada di Ipb University.</p>
                        </div>
                    </div>
                </div>
            </section>
            <script src="main.js"></script>
        </body>
    </html>