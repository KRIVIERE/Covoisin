<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 21/03/18
 * Time: 17:42
 */?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CoVoisin Plateforme Collaborative</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <link rel="stylesheet" href="css/main2.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/line-icon.css">
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
                    <li><a href="accueil.html">Accueil</a></li>
                    <li><a href="#overview">Services</a></li>
                    <li><a href="#features">Compétences</a></li>
                    <li><a href="#screens">Prêts</a></li>
                    <li><a href="#download">Dons</a></li>

                </ul>
            </nav>
            <a href="#" class="nav-toggle">Menu<span></span></a> </div>
        <!-- navigation section  -->
    </header>
</section>
<!-- banner text section-->
<div id="banner" class="container">
    <section id="image" background-image="download.jpeg"></section>

    <!-- banner text section-->

</div>
</div>
</section>
<!-- header section -->
<!-- overview section -->
<section id="overview" class="section overview">
    <section id="listCat">
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
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
        </div>
    </section>
</section>

<!-- overview section -->
<!-- feature section 1 -->

<!-- feature section 2 -->

<!-- feature section 3 -->


</div>
</div>
</section>
<!-- feature section 3 -->

<!-- screen shots slider section-->

<!-- owl-carousel starts -->

<!-- owl-carousel starts -->
</section>
<!-- screen shots slider section -->

<!--subscribe section -->


<div class="container">

    <!-- subscribe message -->
    <div id="mesaj"></div>
    <!-- subscribe message -->
</div>
<!-- subscribe form -->
</div>
</div>
</section>
<!--subscribe section -->

<!--contact section -->

<!--contact section -->
<footer class="section footer">
    <div class="footer-bottom">
        <div class="container">
            <div class="col-md-12">
                <p>
                <ul class="footer-share">
                    <li><a href="https://www.facebook.com/profile.php?id=100022476821836"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://cslecolibri.wordpress.com/"><img src="images/WWW.png" alt=""></a></li>
                </ul>
                </p>
                <p>© Copyright © 2018 Orange Groupe DTA/IRAM All Rights opened. Made with <i class="fa fa-heart pulse"></i> by <a href="https://www.telecom-st-etienne.fr/">Télécom Saint Etienne</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- footer section-->
<!-- Include JS files -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/retina.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.subscribe.js"></script>
<script src="js/jquery.contact.js"></script>
<script src="js/main.js"></script>
</body>
</html>
