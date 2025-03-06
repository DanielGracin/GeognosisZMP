<?php

echo'<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" 
    integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/svg" href="./IMG/Geognosis_Favicon.svg">
    <link rel="stylesheet" href="./CSS/index.css">
    <title>Geognósis</title>
</head>
<body>
    <header class="header"> 
            <a href="index.html">
                <img src="./IMG/Geognosis logo.svg" class="logo">
               </a>
        <nav class="navbar">
            <a href="index.html">Úvod</a>
            <a href="project.html">O projektu</a>
            <a href="history.html">Historie</a>
            <a href="contact.html">Kontakt</a>
            <a href="login.html">Přihlásit se</a>
        </nav>
    </header>

    <div class="showcase">
        <div class="content">
            <h2 class="title">Vítejte na Geognósis</h2>
            <p class="subtitle">Objevte příběhy, které formovaly náš svět, a ponořte se 
                <br>do událostí, které ovlivnily kultury, národy a jednotlivce. </p>
            <a href="login.html" class="index-button">Přihlásit</a>
        </div>
    </div>

    <div class="video">
    <video  controls autoplay loop class="video" width="900"><source src="./VIDEO/Geognosis_reklama.mp4" type="video/mp4"></video>
    </div>

    <section id="naucitese" class="py-1">
        <div class="container">
            <h2 class="m-heading text-center">Co u nás najdete...</h2>
            <div class="items">
                <div class="item">
                    <i class="fa-brands fa-youtube fa-2xl" style="color: #000000;"></i>
                    <div>
                        <h1>Youtube</h1>
                        <p class="text">Videa o historii.</p>
                    </div>
                </div>
                <div class="item">
                    <i class="fa-sharp fa-solid fa-landmark fa-2xl" style="color: #000000;"></i>
                    <div>
                        <h1>Historie</h1>
                        <p class="text">Historie v kostce.</p>
                    </div>
                </div>
               
                <div class="item">
                    <i class="fa-solid fa-khanda fa-2xl" style="color: #000000;"></i>
                    <div>
                        <h1>Fotografie</h1>
                        <p class="text">AI vytvořené fotografie</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p class="footer-text">© 2024/2025 Daniel Gracin | Maturitní projekt</p>
    </footer>
</body>
</html>';
?>