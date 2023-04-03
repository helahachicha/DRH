<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InfopersonnellesFixture
 */
class InfopersonnellesFixture extends TestFixture
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
                'daten' => '2023-04-03',
                'lieu' => 'Lorem ipsum dolor sit amet',
                'nationalite' => 'Lorem ipsum dolor sit amet',
                'ncin' => 1,
                'delivreecin' => 'Lorem ipsum dolor sit amet',
                'datecin' => '2023-04-03',
                'permis' => 'Lorem ipsum dolor sit amet',
                'datepermis' => '2023-04-03',
                'logement' => 'Lorem ipsum dolor sit amet',
                'moyentransport' => 'Lorem ipsum dolor sit amet',
                'heure' => 1,
                'minute' => 1,
                'situationfamiliale' => 'Lorem ipsum dolor sit amet',
                'datemariedivorce' => '2023-04-03',
                'infoprofessionnelle_id' => 1,
                'created' => '2023-04-03 11:37:55',
                'modified' => '2023-04-03 11:37:55',
            ],
        ];
        parent::init();
    }
}
