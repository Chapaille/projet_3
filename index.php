<html>
    <head>
    <script src="https://kit.fontawesome.com/9fbf3fb549.js" crossorigin="anonymous"></script>

    </head> 
    <body>
        <?php include "./header.html"?>

        <!-- Div Réserver le menu qui vous convient -->
        <div id="reserveMenu">
            <div class=reserveMenu--location>
                <i class="fa-solid fa-location-dot"></i> Paris, Belleville 
            </div>
            <div class="reserveMenu--content"> 
                <p class="reserveMenu--content-bold"> 
                    Réservez le menu qui vous convient
                </p>
                <p class="reserveMenu--content-description">
                    Découvrez des restaurants d'exception, séléctionnés par nos soins.
                </p>
                <button class="reserveMenu--content-button" type="button"> 
                    Explorer nos restaurants
                </button>
            </div>
        </div>

        <!-- Fonctionnement section -->
        <div id="fonctionnement">
            <p class="fonctionnement--title"> Fonctionnement </p>
            <div class="fonctionnement--card">
                <i class="fa-solid fa-1"></i>
                <i class="fa-solid fa-mobile-screen-button"></i>
                <p class="fonctionnement--content"> Choisissez un restaurant </p>
            </div>      

            <div class="fonctionnement--card">
                <i class="fa-solid fa-2"></i>
                <i class="fa-solid fa-list-ul"></i>
                <p class="fonctionnement--content"> Composez votre menu </p>
            </div>      

            <div class="fonctionnement--card">
                <i class="fa-solid fa-3"></i>
                <i class="fa-solid fa-store"></i>
                <p class="fonctionnement--content"> Dégustez au restaurant </p>
            </div>      
        </div>
        
        <!-- Section Restaurants -->
        <div id="restaurants">
            <p class="restaurants--title"> Restaurants </p>

            <?php 
                $new = true;
                $image = '../projet_3/images/restaurants/jay-wennington-N_Y88TWmGwA-unsplash.jpg';
                $title = 'La palette du goût';
                $description = 'Ménilmontant';
                include "./restoCard.php"
            ?>  

            <?php 
                $new = true;
                $image = '../projet_3/images/restaurants/louis-hansel-shotsoflouis-qNBGVyOCY8Q-unsplash.jpg';
                $title = 'La note enchantée';
                $description = 'Charonne';
                include "./restoCard.php"
            ?>  

            <?php 
                $new = false;
                $image = '../projet_3/images/restaurants/stil-u2Lp8tXIcjw-unsplash.jpg';
                $title = 'À la française';
                $description = 'Cité Rouge';
                include "./restoCard.php"
            ?>  

            <?php 
                $new = false;
                $image = '../projet_3/images/restaurants/toa-heftiba-DQKerTsQwi0-unsplash.jpg';
                $title = 'Le délice des sens';
                $description = 'Folie-Méricourt';
                include "./restoCard.php"
            ?>  
        </div>
        
        <?php include "./footer.html"?>
    </body>
</html>
