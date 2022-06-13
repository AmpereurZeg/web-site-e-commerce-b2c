<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <link href="<?php echo url('/'); ?>/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  	<!--Image site -->
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo url('/'); ?>/images/shortcut.png" />
	<!--Style-->
    <link rel="stylesheet" href="<?php echo url('/'); ?>/styles/register_styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/styles/button_styles.css">
	<link rel="stylesheet" href="<?php echo url('/'); ?>/styles/register_responsive.css">
	<link rel="stylesheet" href="<?php echo url('/'); ?>/styles/main_styles.css">
    <title>Mon Compte | E-lectronic</title>

</head>

<body>
    <div class="super_container">
	<!-- Header -->

	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="<?php echo url('/'); ?>/images/phone.png" alt=""></div>+212 6 00 00 00 00</div>
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="<?php echo url('/'); ?>/images/mail.png" alt=""></div><a href="mailto:electronickba@gmail.com">electronickba@gmail.com</a></div>
						<div class="top_bar_content ml-auto">
							<div class="top_bar_user">
								<div class="user_icon"><img src="<?php echo url('/'); ?>/images/user.png" alt=""></div>
								<div><a href="user">Mon Compte</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Main -->

		<div class="header_main">
			<div class="container">
				<div class="row">

					<!-- Logo -->
					<div class="col-lg-2 col-sm-3 col-3 order-1">
						<div class="logo_container">
							<div class="logo"><a href="{{ route('index') }}"><img src="<?php echo url('/'); ?>/images/logo.png" alt=""></a></div>
						</div>
					</div>

					<!-- Search -->
					<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
						<div class="header_search">
                            <div id="wrap">
                                <form action="{{ route('Search') }}">
                                <input id="search" name="q" value="{{request()->q ?? ''}}" required="required" type="search" placeholder="Search for products..."><input id="search_submit" value="Rechercher" type="submit">
                                </form>
                              </div>
						</div>
                    </div>

                    <div class="custom_dropdown" style="display: none;">
                        <div class="custom_dropdown_list">
                            <span class="custom_dropdown_placeholder clc">toutes les catégories</span>
                            <i class="fas fa-chevron-down"></i>
                            <ul class="custom_list">
                            </ul>
                        </div>
                    </div>

					<!-- Wishlist -->
					<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
						<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
							<div class="wishlist d-flex flex-row align-items-center justify-content-end">
								<div class="wishlist_icon"><img src="<?php echo url('/'); ?>/images/heart.png" alt=""></div>
								<div class="wishlist_content">
									<div class="wishlist_text"><a href="wishlist">Wishlist</a></div>
									<div class="wishlist_count">0</div>
								</div>
							</div>

							<!-- Cart -->
							<div class="cart">
								<div class="cart_container d-flex flex-row align-items-center justify-content-end">
									<div class="cart_icon">
										<img src="<?php echo url('/'); ?>/images/cart.png" alt="">
										<div class="cart_count"><span>{{$nbrArticle}}</span></div>
									</div>
									<div class="cart_content">
										<div class="cart_text"><a href="{{ route('afficherPanier') }}">Carte</a></div>
										<div class="cart_price">{{number_format($panierTotal,2) }} DH</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col">

						<div class="main_nav_content d-flex flex-row">

							<!-- Categories Menu -->

							<div class="cat_menu_container">
								<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
									<div class="cat_burger"><span></span><span></span><span></span></div>
									<div class="cat_menu_text">CATÉGORIES</div>
								</div>

								<ul class="cat_menu">
									<li><a href="{{ route('New') }}">Nouveautés <i class="fas fa-chevron-right ml-auto"></i></a></li>
									<li><a href="{{ route('Kits') }}">Kits électroniques<i class="fas fa-chevron-right"></i></a></li>
									<li><a href="{{ route('Cartes') }}">Cartes électroniques<i class="fas fa-chevron-right"></i></a></li>
									<li><a href="{{ route('Accessoires') }}">Accessoires<i class="fas fa-chevron-right"></i></a></li>
								</ul>
							</div>

							<!-- Main Nav Menu -->

							<div class="main_nav_menu ml-auto">
								<ul class="standard_dropdown main_nav_dropdown">
									<li><a href="{{ route('index') }}">Accueil<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="{{ route('index') }}#popular">Catégories populaires <i class="fas fa-chevron-down"></i></a></li>
									<li><a href="{{ route('Boutique') }}">Boutique<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="{{ route('projets') }}">Projets DIY <i class="fas fa-chevron-down"></i></a></li>
								</ul>
							</div>

							<!-- Menu Trigger -->

							<div class="menu_trigger_container ml-auto">
								<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
									<div class="menu_burger">
										<div class="menu_trigger_text">menu</div>
										<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</nav>

		<!-- Menu -->

		<div class="page_menu">
			<div class="container">
				<div class="row">
					<div class="col">

						<div class="page_menu_content">

							<div class="page_menu_search">
								<form action="{{ route('Search') }}">
									<input type="search" name="q" value="{{request()->q ?? ''}}" required="required" class="page_menu_search_input" placeholder="Search for products...">
								</form>
							</div>
							<li class="page_menu_item">
								<a href="{{ route('index') }}">Accueil<i class="fa fa-angle-down"></i></a>
							</li>
							<li class="page_menu_item">
								<a href="index#popular">Catégories populaires<i class="fa fa-angle-down"></i></a>
							</li>
							<li class="page_menu_item">
								<a href="{{ route('Boutique') }}">Boutique<i class="fa fa-angle-down"></i></a>
							</li>
							<li class="page_menu_item">
								<a href="{{ route('projets') }}">Projets DIY<i class="fa fa-angle-down"></i></a>
							</li>

							<div class="menu_contact">
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="<?php echo url('/'); ?>/images/phone_white.png" alt=""></div>+212 6 00 00 00 00</div>
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="<?php echo url('/'); ?>/images/mail_white.png" alt=""></div><a href="#">electronickba@gmail.com</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</header>

        <div class="container-fluid">
            <nav class="compte">
                <ul>
                    <li class="compte_li">
                        <a href="index">Accueil</a>
                    </li>
                    <li class="compte_li">
                        <a href="#">Mon compte</a>
                    </li>
                </ul>
            </nav>
        </div>

        <!--User registration-->
        <div class="registration">
            <div class="container-fluid">
                <span class="or-text">or</span>
                <div class="row" id="customer">
                    <div class="col-lg-6 d-flex">
                        <div class="login_contenu">
                            <form action="#" method="post" class="login_form">
								<legend>Se connecter</legend>
								<p></p>
                                <p>Bienvenu Sur notre site! Connecter vous à votre compte.</p>
                                <label>Identifiant ou adresse de messagerie<span>*</span></label><br>
                                <input type="email" placeholder="Pseudo/electronic@gmail.com" required name="identite" id="identite" class="login_id">
                                <label>Mot de passse<span>*</span></label><br>
                                <input type="password" name="mot_pass" id="mot_pass" required class="login_id"><br>
                                <input type="checkbox" name="remenber" id="remenber" style="margin-bottom: 20px;">Se souvenir de moi</br>
                                <input type="button" value="Identification" class="but_enreg"><br>
                                <a href="#">Mot de passe perdu ?</a>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="signin_contenu">
                            <form action="#" method="POST" class="signin_form">
								<legend>S'enregistrer</legend>
								<p></p>
                                <p>Créez aujourd'hui un nouveau compte pour profiter des avantages d'une expérience d'achat personnalisée.</p>
                                <label>Nom<span>*</span><br>
                                <input type="text" name="nom" id="nom"  class="nom" required></label>
                                <label>Prénom<span>*</span><br>
                                <input type="text" name="prenom" id="prenom" class="nom" required></label><br>
                                <label>Email<span>*</span></label><br>
                                <input type="email" name="mail" id="mail" class="email" placeholder="electronic@gmail.com" required><br>
                                <label>Mot de passe<span>*</span> :
                                <input type="password" name="pass" class="nom" id="pass" required></label>
                                <label>Ville<span>*</span>
                                <input type="text" name="ville" class="nom" id="ville"></label><br>
                                <label>Prefix: +212 </label>
                                <label><input type="tel" name="phone" id="phone" class="telp" placeholder="Téléphone mobile(optionnelle)"></label><br>
                                <input type="button" value="S'enregistrer" class="but_enreg">
                            </form>
                            <div>
                                <h4>Inscrivez-vous aujourd'hui et vous pourrez:</h4>
                                <ul>
                                    <li><span class="benefits">&#x2714</span> Accélérez votre passage à la caisse</li>
                                    <li><span class="benefits">&#x2714</span> Suivez vos commandes facilement</li>
                                    <li><span class="benefits">&#x2714</span> Gardez une trace de tous vos achats</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    	<!-- Footer -->

		<footer class="footer">
			<div class="container">
				<div class="row">

					<div class="col-lg-3 footer_col">
						<div class="footer_column footer_contact">
							<div class="logo_container">
								<div class="logo"><a href="{{ route('index') }}">E-lectronic</a></div>
							</div>
							<div class="footer_title">Vous avez une question? Appelez-nous 24/7</div>
							<div class="footer_phone">+212 6 00 00 00 00</div>
							<div class="footer_contact_text">
								<p>Meuntfleuri, Fès</p>
								<p>Fès-Méknes, MOROCCO</p>
							</div>
							<div class="footer_social">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-youtube"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-lg-2 offset-lg-5">
						<div class="footer_column">
							<div class="footer_title">Information</div>
							<ul class="footer_list">
								<li><a href="{{ route('index') }}">Accueil</a></li>
								<li><a href="{{ route('Boutique') }}">Boutique</a></li>
								<li><a href="{{ route('projets') }}">Projets DIY</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-2">
						<div class="footer_column">
							<div class="footer_title">Service Client</div>
							<ul class="footer_list">
								<li><a href="user">Mon Compte</a></li>
								<li><a href="{{ route('afficherPanier') }}">Commandes</a></li>
								<li><a href="wishlist">Wish List</a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</footer>

		<!-- Copyright -->

		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col">

						<div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
							<div class="copyright_content">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</div>
							<div class="logos ml-sm-auto">
								<ul class="logos_list">
									<li><a href="#"><img src="<?php echo url('/'); ?>/images/logos_1.png" alt=""></a></li>
									<li><a href="#"><img src="<?php echo url('/'); ?>/images/logos_2.png" alt=""></a></li>
									<li><a href="#"><img src="<?php echo url('/'); ?>/images/logos_3.png" alt=""></a></li>
									<li><a href="#"><img src="<?php echo url('/'); ?>/images/logos_4.png" alt=""></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>

<script src="<?php echo url('/'); ?>/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo url('/'); ?>/plugins/greensock/TweenMax.min.js"></script>
<script src="<?php echo url('/'); ?>/js/custom.js"></script>
</body>

</html>
