<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Accueil</title>
</head>
<body>
    <!-- Début Header -->
    <header class="headerNavLogo" id="haut">
        <div class="LogoMenu">
            <div class="logOfa">
                <img src="Assets/logo-blanc.png" alt="Logo Ofa">
            </div>
            <div class="navBar">
                <ul class="NavMenu">
                    <li class="MenuList"><a href="#haut">Acceuil</a></li>
                    <li class="MenuList"><a href="#">Blog</a></li>
                    <li class="MenuList"><a href="#">Qui sommes-nous ?</a></li>
                </ul>
            </div>
        </div>
        <div class="linkLogin">
            <div class="iD"><a href="#">S'identifier</a><img src="Assets/icons8_login_96px_1.png" alt="icone"></div>
            <div class="Log"><a href="#">Inscription</a><img src="Assets/icons8_collapse_arrow_96px.png" alt="icone"></div>
        </div>
        <div class="profil">

        </div>
    </header>
<!-- Fin header -->
<!-- Section Présentation -->
<section class="Presentation">
    <div class="TitlePresentationSearch">
        <h1 class="OfaTitle">Une location sans limite, a portée de clique <img src="Assets/icons8_click.png" alt=""> </h1>
        <p class="OfaPresentation">OFA est une plateforme de localisation qui met en relation les prestataires et leurs clients en facilitant les démarches et la mise en avant des matériels proposés.</p>
        <div class="materielProduit">
            <div class="materiel"><a href="#">Trouver un matériel</a><img src="Assets/icons8_collapse_arrow_96px.png" alt="icone"></div>
            <div class="produit"><a href="#">Publier un produit</a><img src="Assets/icons8_cloud_480px.png" alt="icone"></div>
        </div>
    </div>
    <div class="ImagePresentation">
        <img src="Assets/Ecommerce_web_page_pana.png" alt="">
    </div>
</section>
<!-- Fin Section Présentation -->
<!-- Section Liste des produits mis en avant -->
<section class="listeProduit">
    <h2>Liste des produits disponibles</h2>
    <div class="containerProduct">
        <ul class="listPdt">
            <li class="producItem">
                <div class="productCard">
                    <img src="Assets/Product.png" alt="produit">
                    <div class="infoProduct">
                        <p class="productName">Art Plastique...</p>
                        <div class="contLike">
                            <p class="count">12</p>
                            <img src="Assets/like.png" alt="icone">
                        </div>
                    </div>
                    <div class="panierLocalisation">
                        <div class="panier">
                            <img src="Assets/panier.png" alt="icone">
                            <p>Panier</p>
                        </div>
                        <div class="localisation">
                            <p class="loc">Antananarivo</p>
                            <img src="Assets/localité.png" alt="icone">
                        </div>
                    </div>
                    <div class="BoutonLouer">
                        <a href="">Louer</a>
                        <img src="Assets/louer.png" alt="icone">
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<!-- Fin Section Liste des produits mis en avant -->
<!-- securité simplicité qualité -->
<section class="SecSimQual">
    <div class="containerCard">
        <div class="card">
            <img src="Assets/Securite.png" alt="securité">
            <p>Securité</p>
        </div>
        <div class="card">
            <img src="Assets/Simplicite.png" alt="simplicité">
            <p>Simplicité</p>
        </div>
        <div class="card">
            <img src="Assets/Qualite.png" alt="qualité">
            <p>Qualité</p>
        </div>
    </div>
</section>
<!-- Fin securité simplicité qualité -->
<!-- devenir prestataire -->
<section class="prestataire">
    <div class="TitlePrestataire">
        <h2 class="Prestatitle">Vous voulez devenir prestataire ?</h2>
        <p class="Prestation">Optimisez vos revenus en proposant la location de vos biens sous-utilisés, que vous soyez un particulier ou un professionnel.</p>
        <div class="devenirPrestataire">
            <div class="prestataireButton"><a href="#">Devenir prestataire</a></div>
        </div>
    </div>
    <div class="ImagePresentation">
        <img src="Assets/poignet_de_main.png" alt="poignet de main">
    </div>
</section>
<!-- Fin devenir prestataire -->
<!-- revenir en haut -->
<div class="revenirEnHaut">
    <p><a href="#haut">Revenir en haut de la page </a></p>
    <a href="#haut"><img src="Assets/haut.png" alt="icone"></a>
</div>
<!-- fin revenir en haut -->
<!-- Footer -->
<footer>
    <div class="navReclam">
        <div class="footerNavRs">
            <ul class="footerNav">
                <li class="ItemNavfooter"><a href="#haut">Acceuil</a></li>
                <li class="ItemNavfooter"><a href="#">Contact</a></li>
                <li class="ItemNavfooter"><a href="#">Qui sommes-nous ?</a></li>
                <li class="ItemNavfooter"><a href="#">Termes et Conditions d'utilisation</a></li>
            </ul>
            <div class="reseauSociaux">
                <p class="contact">Contactez-nous : </p>
                <div class="IcResSoc">
                    <a href="#">
                        <img src="Assets/Messenger.png" alt="icone" class="ResCoc">
                      </a>
                      <a href="#">
                        <img src="Assets/phone.png" alt="icone" class="ResCoc">
                      </a>
                      <a href="#">
                        <img src="Assets/whatsapp.png" alt="icone" class="ResCoc">
                      </a>
                      <a href="#">
                        <img src="Assets/mail.png" alt="icone" class="ResCoc">
                      </a>
                </div>
            </div>
        </div>
        <div class="LogoReclam">
            <img src="Assets/footerLogo.png" alt="logo">
            <p class="reclam">Des réclamations ?</p>
            <div class="reclamation">
                <input type="text" placeholder="Vos réclamations et vos coordonnées">
                <button>Envoyer</button>
            </div>
        </div>
    </div>
    <hr>
    <div class="OfaTeamSayna">
        <p>Team Ofa X Sayna</p>
        <p>2023</p>
    </div>
    <script src="JS/main.js"></script>
</footer>
</body>
</html>