<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 20/03/18
 * Time: 16:05
 */
include '../inc/autoload.inc.php';

$config = include '../inc/config.inc.php';

$offreDao = new OffreDao($config);
$offres = $offreDao->readAllOffre();

$demandeDao = new DemandeDao($config);
$demandes = $demandeDao->readAllDemande();

require('listCatView.php');