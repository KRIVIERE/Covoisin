<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 20/03/18
 * Time: 12:16
 */?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste catégorie</title>
    <link rel="stylesheet" href="../styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/jquery.fancybox.css">
    <link rel="stylesheet" href="../styles/css/owl.carousel.css">
    <link rel="stylesheet" href="../styles/css/owl.transitions.css">
    <link rel="stylesheet" href="../styles/css/main.css">
    <link rel="stylesheet" href="../styles/css/responsive.css">
    <link rel="stylesheet" href="../styles/css/animate.min.css">
    <link rel="stylesheet" href="../styles/css/line-icon.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
<!-- header section -->
<section class="banner" role="banner">
    <header id="header">
        <div class="header-content clearfix"> <a class="logo" href="#"><img src="images/logo_covoisin_white2.png" alt=""></a>
            <!-- navigation section  -->
            <nav class="navigation" role="navigation">
                <ul class="primary-nav">
                    <li><a href="#banner">Accueil</a></li>
                    <li><a href="#overview">Présentation</a></li>
                    <li><a href="#features">Services</a></li>
                    <li><a href="#screens">Compétences</a></li>
                    <li><a href="#download">Prêts</a></li>
                    <li><a href="#contact">Dons</a></li>
                </ul>
            </nav>
            <a href="#" class="nav-toggle">Menu<span></span></a> </div>
        <!-- navigation section  -->
    </header>
</section>
<!-- header section -->

<!--Liste-->
<section id="listeCat">
    <div class="col-xs-12 col-md-6">
        <h2>Liste des offres</h2>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Titre</th>
                    <th>Catégorie</th>
                    <th>Description</th>
                    <th>Nombre de points</th>
                </tr>
            </thead>

            <tbody>
                    <?php
                    foreach ($offres as $offre) {
                    ?>
                <tr>
                    <td><?php echo $offre->date;?></td>
                    <td><?php echo $offre->titre;?></td>
                    <td><?php echo $offre->categorie;?></td>
                    <td><?php echo $offre->description;?></td>
                    <td>10</td>
                </tr>
                    <?php
                    }
                    ?>
            </tbody>
        </table>
    </div>

    <div class="col-xs-12 col-md-6">
        <h2>Liste des demandes</h2>

        <table class="table table-hover">
            <thead>
            <tr>
                <th>Date</th>
                <th>Titre</th>
                <th>Catégorie</th>
                <th>Description</th>
                <th>Nombre de points</th>
            </tr>
            </thead>

            <tbody>
            <?php
            foreach ($demandes as $demande) {
                ?>
                <tr>
                    <td><?php echo $demande->date;?></td>
                    <td><?php echo $demande->titre;?></td>
                    <td><?php echo $demande->categorie;?></td>
                    <td><?php echo $demande->description;?></td>
                    <td>10</td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</section>

<!-- footer section-->
    <footer class="section footer">
        <div class="footer-bottom">
            <div class="container">
                <div class="col-md-12">

                    <ul class="footer-share">
                        <li><a href="https://www.facebook.com/profile.php?id=100022476821836"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://cslecolibri.wordpress.com/"><img src="images/internet3.png" alt=""></a></li>
                    </ul>

                    <p>© Copyright © 2018 Orange Groupe DTA/IRAM All Rights opened. Made with <i class="fa fa-heart pulse"></i> by <a href="https://www.telecom-st-etienne.fr/">Télécom Saint Etienne</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer section-->
    <!-- Include JS files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../scripts/js/bootstrap.min.js"></script>
    <script src="../scripts/js/jquery.fancybox.pack.js"></script>
    <script src="../scripts/js/retina.min.js"></script>
    <script src="../scripts/js/modernizr.js"></script>
    <script src="../scripts/js/owl.carousel.min.js"></script>
    <script src="../scripts/js/jquery.subscribe.js"></script>
    <script src="../scripts/js/jquery.contact.js"></script>
    <script src="../scripts/js/main.js"></script>
</body>
</html>
