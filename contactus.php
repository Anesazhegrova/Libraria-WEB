<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontaktoni</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- linku per font font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- linku i css  -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <div class="header-1">
            <!-- Keto 3 perdoren per icon style :fas perdoret per solid, fal per light, fab per brand -->
            <a href="#" class="logo"><i class = "fas fa-book"></i>Libraria101</a>
           
            <form action = "" class = "search-form">
                <input type = "search" name ="" placeholder = "Kërko këtu..." id="search-box">
                <label for ="search-box" class ="fas fa-search"></label>
            </form>

            <div class = "icons">
                <div id = "search-btn" class="fas fa-search"></div>
                <!--<a href ="#" class = "fas fa-heart"></a>
                <a href ="#" class = "fas fa-shopping-cart"></a>-->
                <div id = "login-btn" class ="fas fa-user"></div>
                <div id = "signup-btn" class ="far fa-user-circle"></div>
                
            </div>

        </div> 

        <div class="header-2">
            <nav class = "navbar">
                <a href = "home.html">Faqja Kryesore</a>
                <a href = "shop.html">Librat</a>
                <a href = "contactus.html">Na kontaktoni</a>
                <a href = "blogs.html">Blogjet</a>
            </nav>
        </div>
    </header>
<!-- header perfundon ketu-->
<!--contact us fillon ketu-->
<div class="container">
    <div class="contact-box">
        <div class="left"></div>
        <div class="right">
            <h2>Contact Us</h2>
            <form action = "usercontactinfo.php" method = "post">
            <input type="text" name ="emri" class="field" placeholder="Your Name">
            <input type="text" name="email" class="field" placeholder="Your Email">
            <input type="text" name="phone" class="field" placeholder="Phone">
            <textarea placeholder="Message" name="message" class="field"></textarea>
            <button class="btn1">Send</button>
        </div>
    </div>
</div>
<!--contact us mbaron ketu-->


<!-- footer fillon ketu-->
<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Lokacioni ynë</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Lipjan </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Prishtinë </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Prizeren </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Pejë </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Ferizaj </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Gjilan </a>
        </div>

        <div class="box">
            <h3>Lidhjet e shpejta</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> Faqja Kryesore </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Librat e paraqitur </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Ardhjet </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Komentet </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Blogjet </a>
        </div>

        <div class="box">
            <h3>Lidhje shtesë</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> informacioni i llogarisë</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> artikujt e porositur </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Politika e privatësisë </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Metoda e pagesës </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> shërbimet tona </a>
        </div>

        <div class="box">
            <h3>informacion kontakti</h3>
            <a href="#"> <i class="fas fa-phone"></i> +383 45 252 128 </a>
            <a href="#"> <i class="fas fa-phone"></i> +383 45 469 188 </a>
            <a href="#"> <i class="fas fa-envelope"></i> anesazhegrova6@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> blendabiqkaj3@gmail.com </a>
            <img src="image/kosovomapp.png" class="map" alt="">
        </div>
        
    </div>

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="credit"> krijuar nga <span>Anesa Zhegrova & Blendiona Biqkaj</span> | të gjitha të drejtat e rezervuara! </div>

</section>
</body>
</html>