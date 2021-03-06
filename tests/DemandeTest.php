<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 20/03/18
 * Time: 10:16
 */

include '../inc/autoload.inc.php';

use PHPUnit\Framework\TestCase;

class DemandeTest extends TestCase
{
    public function testDemande() {
        $offre1 = new Offre("Bidon", "Bidon", "Bidon", 1, 10);

        $this->assertEquals("Bidon", $offre1->titre);
        $this->assertEquals("Bidon", $offre1->description);
        $this->assertEquals("Bidon", $offre1->categorie);
        $this->assertEquals(1, $offre1->userId);
        $this->assertEquals(10, $offre1->nombreDePoints);
    }
}
