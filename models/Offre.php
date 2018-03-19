<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 19/03/18
 * Time: 15:01
 */

class Offre extends ClassMereOD
{
    public function __construct($titre, $description, $categorie, $userId, $nombreDePoints)
    {
        parent::__construct($titre, $description, $categorie, $userId, $nombreDePoints);
    }
}