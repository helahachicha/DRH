<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InfogenfpsychiquesFixture
 */
class InfogenfpsychiquesFixture extends TestFixture
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
                'indicateurcomp_id' => 1,
                'points' => 1,
                'nomprenom' => 'Lorem ipsum dolor sit amet',
                'dateevaluation' => '2023-03-21',
                'objetevaluation' => 'Lorem ipsum dolor sit amet',
                'decisiondirection' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-03-21 15:19:18',
                'modified' => '2023-03-21 15:19:18',
            ],
        ];
        parent::init();
    }
}
