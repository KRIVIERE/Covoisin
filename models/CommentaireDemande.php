<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 19/03/18
 * Time: 17:17
 */

class CommentaireDemande extends CommentairesMere
{
    public $demandeId;

    public function __construct($userId, $description, $statut, $descriptionStatut, $demandeId)
    {
        parent::__construct($userId, $description, $statut, $descriptionStatut);
        $this->demandeId = $demandeId;
    }
}