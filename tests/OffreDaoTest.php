<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 20/03/18
 * Time: 10:21
 */

include '../inc/autoload.inc.php';

use PHPUnit\Framework\TestCase;

class OffreDaoTest extends TestCase
{
    private $offreDao;

    protected function setUp() {
        parent::setUp();

        $config = include '../inc/config.inc.php';

        $this->offreDao = new OffreDao($config);
    }

    protected function tearDown() {
        $this->offreDao->close();

        $this->offreDao = null;

        parent::tearDown();
    }

    /*public function testReadAllOffre() {
        $offres = $this->offreDao->readAllOffre();

        $this->assertEquals(2, count($offres));

        $this->assertEquals("Test2", $offres[0]->titre);
        $this->assertEquals("Bidon2", $offres[0]->description);
        $this->assertEquals("Inconnu2", $offres[0]->categorie);
        $this->assertEquals(2, $offres[0]->userId);


        $this->assertEquals("Test", $offres[1]->titre);
        $this->assertEquals("Bidon", $offres[1]->description);
        $this->assertEquals("Inconnu", $offres[1]->categorie);
        $this->assertEquals(1, $offres[1]->userId);
    }*/

    public function testCreateOffre() {
        $offre = new Offre('Test5', 'Bidon5', 'Inconnu5', 5, 10);

        $this->offreDao->createOffre($offre);

        $offres = $this->offreDao->readAllOffre();

        $this->assertEquals('Test5', $offres[0]->titre);
        $this->assertEquals('Bidon5', $offres[0]->description);
        $this->assertEquals('Inconnu5', $offres[0]->categorie);
        $this->assertEquals(5, $offres[0]->userId);
    }
}
