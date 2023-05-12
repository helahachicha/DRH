<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InfoemployesFixture
 */
class InfoemployesFixture extends TestFixture
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
                'nomprenom' => 'Lorem ipsum dolor sit amet',
                'adresse' => 'Lorem ipsum dolor sit amet',
                'telprof' => 1,
                'telpersonnel' => 1,
                'contact' => 1,
                'mailprof' => 'Lorem ipsum dolor sit amet',
                'mailpersonnel' => 'Lorem ipsum dolor sit amet',
                'servicetravail' => 'Lorem ipsum dolor sit amet',
                'poste_id' => 1,
                'datenaissance' => '2023-05-12 16:08:38',
                'lieu' => 'Lorem ipsum dolor sit amet',
                'nationnalite' => 'Lorem ipsum dolor sit amet',
                'cin' => 1,
                'delivreea' => 'Lorem ipsum dolor sit amet',
                'datedelivrance' => '2023-05-12 16:08:38',
                'permis' => 'Lorem ipsum dolor sit amet',
                'datepermis' => '2023-05-12 16:08:38',
                'logement' => 'Lorem ipsum dolor sit amet',
                'moytransport' => 'Lorem ipsum dolor sit amet',
                'estimatransport' => '16:08:38',
                'etatsociale' => 'Lorem ipsum dolor sit amet',
                'dateetatsociale' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-05-12 16:08:38',
                'modified' => '2023-05-12 16:08:38',
            ],
        ];
        parent::init();
    }
}
