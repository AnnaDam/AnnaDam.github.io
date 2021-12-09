<!DOCTYPE html>
<html lang="lv">
    <head>
        <title>Alie-exclusive</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
				<script src="assets/js/theme.js"></script>
				<link rel="stylesheet" href="assets/font/font.css"> 
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/home.css">
        <?php include'db.php'; ?>
    </head>
    <body>

        <!--Izvēlne / navigācija-->
        <div class="nav">
            <div class="logo-container">
                <img src="assets/img/AE_logo3.png" alt="logo" class="logo">
               <!-- <picture>
                    <source media="(min-width: 1140px)" srcset="assets/img/AE_logo3.png" class="logo">
                    <source media="(max-width: 1140px)" srcset="assets/img/AE_logo.png" class="logo">
                    <img src="assets/img/AE_logo3.png" class="logo" alt="Logo">
                </picture> -->
            </div>
            <input type="image" src="assets/img/menu.png" id="nav-icon" onclick="openNav()" alt="Atvērt navigāciju">   
            <div id="overlay-nav"> 
                <input type="image" src="assets/img/close.png" id="close-nav" onclick="closeNav()" alt="Aizvērt navigāciju">
                <div id="nav-items">
                    <ul	style="list-style-type: none;">
                        <li id="checked"><a href="index.html">Sākums</a></li>
                        <li><a href="news.html">Jaunumi</a></li>
                        <li><a href="about.html">Par mums</a></li>
                        <li><a href="shop.html">Veikals</a></li>
                        <li><a href="order.html">Pasūtīt</a></li>
                        <li><a href="reviews.html">Atsauksmes</a></li>
                    </ul>
                </div>
            </div>
        </div>

				<!--Attēlu karuselis (ņemts no https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_carousel&stacked=h)-->
				<div class="container-carousel">  
					<div id="myCarousel" class="carousel slide" data-ride="carousel">

						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
						</ol>
				
						<div class="carousel-inner">
							<div class="item active">
								<img src="assets/img/red.jpg" alt="Sarkans šablons" style="width:100%;">
							</div>
				
							<div class="item">
								<img src="assets/img/cream.jpg" alt="Adījuma raksts" style="width:100%;">
							</div>
						</div>
					</div>
				</div>

				<!--Teksts uz karuseļa-->
				<h2></h2>

				<h3>Par mums</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

				<input type="button" class="button" value="Lasīt vairāk" onclick="window.location.href='about.html'">

    </body>

		<footer>
		<hr class="footer-line">

		</footer>
</html>