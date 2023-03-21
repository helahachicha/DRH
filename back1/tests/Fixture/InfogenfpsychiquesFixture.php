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
                'nomprenom' => 'Lorem ipsum dolor sit amet',
                'dateevaluation' => '2023-03-21',
                'objetevaluation' => 'Lorem ipsum dolor sit amet',
                'decisiondirection' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-03-21 05:29:05',
                'modified' => '2023-03-21 05:29:05',
            ],
        ];
        parent::init();
    }
}
