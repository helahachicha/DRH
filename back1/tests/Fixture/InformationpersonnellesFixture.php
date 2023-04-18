<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InformationpersonnellesFixture
 */
class InformationpersonnellesFixture extends TestFixture
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
                'datenaissance' => '2023-04-17',
                'lieunaissance' => 'Lorem ipsum dolor sit amet',
                'nationalite' => 'Lorem ipsum dolor sit amet',
                'ncin' => 1,
                'lieucin' => 'Lorem ipsum dolor sit amet',
                'datecin' => '2023-04-17',
                'permis' => 'Lorem ipsum dolor sit amet',
                'datepermis' => '2023-04-17',
                'logement' => 'Lorem ipsum dolor sit amet',
                'moyentransport' => 'Lorem ipsum dolor sit amet',
                'minutetrajet' => 1,
                'heuretrajet' => 1,
                'situationfamiliale' => 'Lorem ipsum dolor sit amet',
                'datesituation' => '2023-04-17',
                'critereenfance' => 'Lorem ipsum dolor sit amet',
                'beaumoment' => 'Lorem ipsum dolor sit amet',
                'mauvaismoment' => 'Lorem ipsum dolor sit amet',
                'informationprofessionnelle_id' => 1,
                'created' => '2023-04-17 14:15:28',
                'modified' => '2023-04-17 14:15:28',
            ],
        ];
        parent::init();
    }
}
