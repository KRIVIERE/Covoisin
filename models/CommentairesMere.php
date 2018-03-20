<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 19/03/18
 * Time: 17:42
 */

class CommentairesMere
{
    public $id;
    public $userId;
    public $description;
    public $statut;
    public $descriptionStatut;

    public function __construct($userId, $description, $statut, $descriptionStatut)
    {
        $this->userId = $userId;
        $this->description = $description;
        $this->statut = $statut;
        $this->descriptionStatut = $descriptionStatut;
    }
}