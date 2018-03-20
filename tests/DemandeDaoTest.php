<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 20/03/18
 * Time: 11:00
 */

include '../inc/autoload.inc.php';

use PHPUnit\Framework\TestCase;

class DemandeDaoTest extends TestCase
{
    private $demandeDao;

    protected function setUp() {
        parent::setUp();

        $config = include '../inc/config.inc.php';

        $this->demandeDao = new DemandeDao($config);
    }

    protected function tearDown() {
        $this->demandeDao->close();

        $this->demandeDao = null;

        parent::tearDown();
    }

    public function testReadAllDemande() {
        $demandes = $this->demandeDao->readAllDemande();

        $this->assertEquals(2, count($demandes));

        $this->assertEquals("Test4", $demandes[0]->titre);
        $this->assertEquals("Bidon4", $demandes[0]->description);
        $this->assertEquals("Inconnu4", $demandes[0]->categorie);
        $this->assertEquals(4, $demandes[0]->userId);

        $this->assertEquals("Test3", $demandes[1]->titre);
        $this->assertEquals("Bidon3", $demandes[1]->description);
        $this->assertEquals("Inconnu3", $demandes[1]->categorie);
        $this->assertEquals(3, $demandes[1]->userId);
    }
}
