<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 19/03/18
 * Time: 17:50
 */

class DaoBase
{
    protected $bdd;

    public function __construct($config)
    {

        $this->bdd = new \PDO
        ("mysql:host=" . $config['db.host'] . ";dbname=" . $config['db.name'] . ";charset=utf8",
            $config['db.username'],
            $config['db.password']);
    }

    public function close()
    {
        $this->bdd = null;
    }
}