<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 19/03/18
 * Time: 15:01
 */

class DemandeDao extends DaoBase
{
    public function __construct($config) {
        parent::__construct($config);
    }

    public function createDemande() {

    }

    public function readAllDemande() {
        $result = [];

        $reponse = $this->bdd->query("SELECT * FROM Demandes ORDER BY ID DESC");

        while($datas = $reponse->fetch()) {
            $titre = $datas['Titre'];
            $date = $datas['Date'];
            $description = $datas['Description'];
            $categorie = $datas['Categorie'];
            $userId = $datas['userID'];

            $demande = new Demande($titre, $description, $categorie, $userId, 10);

            $result[] = $demande;
        }

        return $result;
    }

    public function readDemande() {

    }

    public function updateDemande() {

    }

    public function deleteDemande() {

    }
}