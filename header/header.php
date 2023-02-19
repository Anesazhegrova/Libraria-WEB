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
    <link rel="stylesheet" href="hstyle.css">
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
                <a href = "../home.php">Faqja Kryesore</a>
                <a href = "../shopp.php">Librat</a>
                <a href = "../contactus.php">Na kontaktoni</a>
                <a href = "../blogs.php">Blogjet</a>
            </nav>
        </div>
    </header>
</body>
</html>