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
        $query = $this->bdd->prepare("INSERT INTO Offres (Titre, Description, Categorie, userID) VALUES (:titre, :description, :categorie, :userId)");

        $query->bindParam(":titre", $offre->titre);
        $query->bindParam(":description", $offre->description);
        $query->bindParam(":categorie", $offre->categorie);
        $query->bindParam(":userId", $offre->userId);

        $query->execute();

        $id = $this->bdd->lastInsertId();

        $offre->id = $id;

        return $id;
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
            $offre->date = $date;

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