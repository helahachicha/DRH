<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FormaexternesFixture
 */
class FormaexternesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'typecomp' => 'Lorem ipsum dolor sit amet',
                'themforma' => 'Lorem ipsum dolor sit amet',
                'participant' => 'Lorem ipsum dolor sit amet',
                'nbparticipant' => 1,
                'raisonforma' => 'Lorem ipsum dolor sit amet',
                'organismeforma' => 'Lorem ipsum dolor sit amet',
                'formalite' => 'Lorem ipsum dolor sit amet',
                'formateur' => 'Lorem ipsum dolor sit amet',
                'raisonchoix' => 'Lorem ipsum dolor sit amet',
                'dureeforma' => 'Lorem ipsum dolor sit amet',
                'nbjour' => 1,
                'nbhjour' => 1,
                'date' => '2023-03-11 22:17:04',
                'horaireforma' => 'Lorem ipsum dolor sit amet',
                'pause' => 'Lorem ipsum dolor sit amet',
                'lieuforma' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-03-11 22:17:04',
                'modified' => '2023-03-11 22:17:04',
            ],
        ];
        parent::init();
    }
}
