<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FormaacademiquesFixture
 */
class FormaacademiquesFixture extends TestFixture
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
                'niveau' => 'Lorem ipsum dolor sit amet',
                'specialite' => 'Lorem ipsum dolor sit amet',
                'annee' => 'Lorem ipsum dolor sit amet',
                'etablissement' => 'Lorem ipsum dolor sit amet',
                'informationprofessionnelle_id' => 1,
                'created' => '2023-04-17 14:15:12',
                'modified' => '2023-04-17 14:15:12',
            ],
        ];
        parent::init();
    }
}
