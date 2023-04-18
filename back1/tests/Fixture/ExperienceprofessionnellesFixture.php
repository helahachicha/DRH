<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ExperienceprofessionnellesFixture
 */
class ExperienceprofessionnellesFixture extends TestFixture
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
                'societe' => 'Lorem ipsum dolor sit amet',
                'periode' => 'Lorem ipsum dolor sit amet',
                'fonction' => 'Lorem ipsum dolor sit amet',
                'initiative' => 'Lorem ipsum dolor sit amet',
                'salaire' => 1,
                'informationprofessionnelle_id' => 1,
                'created' => '2023-04-17 14:15:02',
                'modified' => '2023-04-17 14:15:02',
            ],
        ];
        parent::init();
    }
}
