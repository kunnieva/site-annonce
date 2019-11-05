<!-- page accueil thème noel-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/style-accueil.css" type="text/css" media="screen">
<link rel="stylesheet" href="assets/css/style.css" type="text/css" media="screen">
<title>Site Annonce</title>
<style>
    
body {
margin: 0;
font-family: Arial, Helvetica, sans-serif;
}


.topnav {
  overflow: hidden;
  background-color: #333;
  width:100%;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: rgb(38, 167, 6);
  color: black;
}

.topnav a.active {
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 1440px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 1440px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
</head>
<body>
<header>
    <nav>
<!-- nav responsive https://www.w3schools.com/howto/howto_js_topnav_responsive.asp-->
        <div class="topnav" id="myTopnav">           
            <div class="active" style="display:flex;flex-direction: row;justify-content: flex-start;flex-wrap: wrap;align-items: center;padding-left:2rem;"><button class="bouton-annonce">Déposer votre annonce</button>                      
            <a href="#news"><img src="assets/images/photo-site/logo-1.png" class="logo" alt="Logo"/></a>
            <a href="index-faq.html" class="aide">Aide et contact <img src="assets/images/icone-projet/information.png" alt="Information" width="32" height="32"></a>
            <a href="#compte"><img src="assets/images/icone-projet/avatar.png" alt="Votre compte" width="32" height="32"/></a>
            <a href="#panier"><img src="assets/images/icone-projet/shopping-basket.png" alt="Votre panier" width="32" height="32"/></a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
            </div>
        </div>
    </nav>
<!--menu SELECTION PAGES-->
    <div >
        <ul class="menu2">
            <li><a href="#">Boutique</a></li>
            <li><a href="#">Troc</a></li>
            <li><a href="#">XXX</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Espace Pro</a></li>
            <li><a href="#">Conseil Déco</a></li>
            <li><a href="#">Le Mag</a></li>
 <!--menu déroulant pour langues étrangères-->
            <li>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="assets/images/icone-projet/internet.png" alt="Votre panier" width="32" height="32"/>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <button class="dropdown-item" type="button">Français</button>
                        <button class="dropdown-item" type="button">Anglais</button>
                        <button class="dropdown-item" type="button">Espagnol</button>
                        <button class="dropdown-item" type="button">Russe</button>
                    </div>
                </div>
            </li>
            <li>
                <form action="/action_page.php" method="POST"  class="recherche">
                    <input placeholder="Votre recherche" type="text" class="entrerRecherche"/> 
                    <button><img src="assets/images/icone-projet/search.png" class="recherche2" style="margin:-3px;" alt="recherche" ></button>          
                </form>
            </li>
        </ul>
    </div>
    
</header>
<main>

        