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
                'datenaissancee' => '2023-04-18',
                'niveauetude' => 'Lorem ipsum dolor sit amet',
                'centreinteret' => 'Lorem ipsum dolor sit amet',
                'etatsante' => 'Lorem ipsum dolor sit amet',
                'informationprofessionnelle_id' => 1,
                'created' => '2023-04-18 08:43:32',
                'modified' => '2023-04-18 08:43:32',
            ],
        ];
        parent::init();
    }
}
