<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 19/03/18
 * Time: 15:03
 */

class ClassMereOD
{
    public $id;
    public $date;
    public $titre;
    public $description;
    public $categorie;
    public $userId;
    public $nombreDePoints;

    public function __construct($titre, $description, $categorie, $userId, $nombreDePoints) {
        $this->titre = $titre;
        $this->description = $description;
        $this->categorie = $categorie;
        $this->userId = $userId;
        $this->nombreDePoints = $nombreDePoints;
    }

}