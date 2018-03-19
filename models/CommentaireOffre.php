<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 19/03/18
 * Time: 17:17
 */

class CommentaireOffre extends CommentairesMere
{
    public $offreId;

    public function __construct($userId, $description, $statut, $descriptionStatut, $offreId)
    {
        parent::__construct($userId, $description, $statut, $descriptionStatut);
        $this->offreId = $offreId;
    }
}