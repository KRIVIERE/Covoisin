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

    public function createDemande($demande) {
        $query = $this->bdd->prepare("INSERT INTO Demandes (Titre, Description, Categorie, userID) VALUES (:titre, :description, :categorie, :userId)");

        $query->bindParam(":titre", $demande->titre);
        $query->bindParam(":description", $demande->description);
        $query->bindParam(":categorie", $demande->categorie);
        $query->bindParam(":userId", $demande->userId);

        $query->execute();

        $id = $this->bdd->lastInsertId();

        $demande->id = $id;

        return $id;
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
            $demande->date = $date;

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