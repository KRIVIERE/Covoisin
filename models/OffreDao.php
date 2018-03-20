<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 19/03/18
 * Time: 15:01
 */

class OffreDao extends DaoBase
{
    public function __construct($config) {
        parent::__construct($config);
    }

    public function createOffre($offre) {
        /*$query = $this->bdd->prepare("INSERT INTO Offres (Titre, Description, Categorie) VALUES (:titre, :description, :categorie)");

        $query->bindParam(":titre", $offre->titre);
        $query->bindParam(":description", $offre->description);
        $query->bindParam(":titre", $offre->titre);*/
    }

    public function readAllOffre() {
        $result = [];

        $reponse = $this->bdd->query("SELECT * FROM Offres ORDER BY ID DESC");

        while($datas = $reponse->fetch()) {
            $titre = $datas['Titre'];
            $date = $datas['Date'];
            $description = $datas['Description'];
            $categorie = $datas['Categorie'];
            $userId = $datas['userID'];

            $offre = new Offre($titre, $description, $categorie, $userId, 10);

            $result[] = $offre;
        }

        return $result;
    }

    public function readOffre() {

    }

    public function updateOffre() {

    }

    public function deleteOffre() {

    }
}