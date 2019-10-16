<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="./assets/css/style-depose-anonce.css">
</head>
<body>
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
  background-color: #ddd;
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
        <a href="#home" class="active"><button class="bouton-annonce">Déposer votre annonce</button></a>                      
        <a href="#news"><img src="assets/images/photo-site/logo-1.png" class="logo" alt="Logo"
                w/></a>
        <a href="#contact">Aide et contact <img src="assets/images/icone-projet/information.png" alt="Information" widht="32" height="32"></a>
        <a href="#about"><button>Votre recherche</button></a>
        <a href="#compte"><img src="assets/images/icone-projet/avatar.png" alt="Votre compte" widht="32" height="32"/></a>
        <a href="#panier"><img src="assets/images/icone-projet/shopping-basket.png" alt="Votre panier" widht="32" height="32"/></a>
<!--menu déroulant pour langues étrangères-->
        
        <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="assets/images/icone-projet/internet.png" alt="Votre panier" widht="32" height="32"/>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <button class="dropdown-item" type="button">Français</button>
                    <button class="dropdown-item" type="button">Anglais</button>
                    <button class="dropdown-item" type="button">Espagnol</button>
                    <button class="dropdown-item" type="button">Russe</button>
                </div>
                </div>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </nav>
    </div>
</header>

 
 <p class="form_left"> 
					<label for="options">Catégorie :</label>				</p>
				
				<p class="form_right_select"><select id="options" name="cat" class="select_recherche_form" onchange="DisplayOptions(); DisplayComment(); DisplayPrix()"><option value="0">Choisissez la catégorie</option><option value="0" disabled class="fond_select_categories uppercase">-- SERVICES à DOMICILE --</option><option value="2">Aide aux personnes âgées</option><option value="45">Garde d&#039;enfants</option><option value="47">Ménage et repassage</option><option value="62">Transport - Déménagement</option><option value="49">Livraison des courses</option><option value="50">Cuisine</option><option value="51">Mécanique</option><option value="79">Garde d&#039;animaux</option><option value="173">Éducateur d&#039;animaux</option><option value="166">Conseil Juridique</option><option value="60">Aide administrative</option><option value="52">Service divers</option><option value="0" disabled class="fond_select_categories uppercase">-- MAISON &AMP; HABITAT --</option><option value="140">Jardinage</option><option value="139">Bricolage - Travaux</option><option value="143">Amélioration de l&#039;habitat</option><option value="92">Dépannage informatique &amp; électroménager</option><option value="55">Finances &amp; Assurances</option><option value="141">Gardien de propriété</option><option value="155">Gestion immobilière</option><option value="0" disabled class="fond_select_categories uppercase">-- RENCONTRES SéNIORS --</option><option value="32">Rencontre amoureuse - F ch. H</option><option value="64">Rencontre amoureuse - H ch. F</option><option value="63">Rencontre amicale</option><option value="0" disabled class="fond_select_categories uppercase">-- TOURISME --</option><option value="127">Hôtellerie</option><option value="128">Gîtes &amp; Chambres d&#039;hôtes</option><option value="129">Camping</option><option value="130">Restaurants - Bars/Pubs  </option><option value="152">Séjour &amp; Voyages</option><option value="167">Oenotourisme</option><option value="0" disabled class="fond_select_categories uppercase">-- SANTé &AMP; BIEN-êTRE --</option><option value="132">Bien-être &amp; Massages</option><option value="133">Thérapeutes</option><option value="134">Matériel médical</option><option value="165">Soins naturels </option><option value="135">Remise en forme - Fitness</option><option value="153">Résidences Séniors</option><option value="0" disabled class="fond_select_categories uppercase">-- COURS SéNIORS --</option><option value="83">Cours informatique</option><option value="84">Cours de Musique &amp; Danse</option><option value="97">Soutien scolaire - Langues</option><option value="87">Cours divers</option><option value="0" disabled class="fond_select_categories uppercase">-- LOISIRS &AMP; SORTIES --</option><option value="137">Association - Bénévolat</option><option value="138">Evènement/Sortie</option><option value="157">Jeux &amp; Divertissement</option><option value="158">Spiritualité</option><option value="161">Culture</option><option value="163">Activités aériennes </option><option value="164">Média &amp; Presse</option><option value="171">Sport</option><option value="0" disabled class="fond_select_categories uppercase">-- VIE LOCALE SéNIORS --</option><option value="103">Auto - Caravaning - Bateau</option><option value="147">Immobilier</option><option value="170">Investissement PME</option><option value="105">Animaux</option><option value="100">Voyances</option><option value="75">Commerces de proximité</option><option value="159">Photographe &amp; Vidéaste</option><option value="0" disabled class="fond_select_categories uppercase">-- EMPLOI SéNIORS --</option><option value="146">Offre d&#039;emploi Seniors</option><option value="0" disabled class="fond_select_categories uppercase">-- SHOPPING --</option><option value="149">Meuble &amp; Déco</option><option value="150">Mode &amp; Accessoires</option><option value="151">Santé &amp; Bien-être</option><option value="156">Gastronomie</option><option value="162">Cadeaux</option><option value="172">Création &amp; Artisanat</option><option value="154">Autres</option></select></p>
				
										<div id="display_prix"></div>
											
				<div id="options_form">
									</div>	
				
								<p class="form_left">Vous êtes :</p>
				
				<div class="conteneurRadio" id="conteneurRadio1">
					<p class="form_right">
						<input type="radio" id="sta1" name="sta"  onclick="turnImgRadio(this, 1); GetPro(1, '', '', '0');" value="1" />
						<label for="sta1">Particulier</label>&nbsp;
						
													<input type="radio" id="sta2" name="sta" checked = "checked" onclick="turnImgRadio(this, 1);  GetPro(2, 'Nom de votre entreprise', 'N° SIREN de Entreprise', '0');" value="2" />
							<label for="sta2">Professionnel</label>
											</p>
				</div>
								
								<div id="get_pro">
											<p class="form_left">
							<label for="ent">Nom de votre entreprise :</label>						</p>
						
						<p class="form_right">
							<input type="text" id="ent" class="long_input" name="ent" value="" />
						</p>
						
										</div>
				
								
				<input type="hidden" name="typ" value="1" />
				
				
				<p class="form_left">
					<label for="nom">Votre nom :</label>				</p>
				
				<p class="form_right_select">
					<input type="text" id="nom" class="av_input" name="nom" value="" />
				</p>
				
									<p class="form_left">
						<label for="ema">Votre email :</label>					</p>
					<p class="form_right_select">
						<input type="text" id="ema" class="av_input" name="ema" value="" />
					</p>
								<p class="form_right_info">Votre email ne sera pas visible par les utilisateurs du site.<br />
									Ils pourront vous contacter en utilisant un formulaire prévu à cet effet.</p>
				
				
									<p class="form_left">
						<label for="tel">Votre numéro de téléphone :</label>					</p>
					
					<p class="form_right_select">
						<input type="text" id="tel" class="av_input" name="tel" value="" />
						<input type="checkbox" class="input_checkbox" id="tel_cache" name="tel_cache" value="Y" onclick="turnImgCheck(this)"  />
						<span class="info_form"><label for="tel_cache">Cacher votre numéro dans l'annonce</label></span> 
					</p>
						</div>
		<div class="columns-item-2-small">
			<div id="form_txt_2" class="form_cadre_info">Complétez toutes vos informations personnelles (sachant que les visiteurs n’auront pas accès à votre date de naissance, ni à votre email). <br /><br />Pour toute question relatives à nos tarifs, vous pouvez retrouver le détail en vous rendant ici : <a href="https://www.terre-des-seniors.fr/Page-11-Tarif.htm"> >> TARIFS <<</a></div>
		</div>
	</div>
		
		<div class="form_navigation_container form_right_option">
							<input class="depot_button next" type="submit" name="direction" value="Étape suivante >" />
						</div>
		
	</div>
</form>
</div>
</div>

</div>
</div>
</body>
</html> 