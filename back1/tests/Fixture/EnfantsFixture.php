<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EnfantsFixture
 */
class EnfantsFixture extends TestFixture
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
                'ordre' => 1,
                'prenom' => 'Lorem ipsum dolor sit amet',
                'datenaissance' => '2023-04-17',
                'niveauetude' => 'Lorem ipsum dolor sit amet',
                'centreinteret' => 'Lorem ipsum dolor sit amet',
                'etatsante' => 'Lorem ipsum dolor sit amet',
                'informationprofessionnelle_id' => 1,
                'created' => '2023-04-17 14:14:46',
                'modified' => '2023-04-17 14:14:46',
            ],
        ];
        parent::init();
    }
}
