<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InfoficheevaluationsFixture
 */
class InfoficheevaluationsFixture extends TestFixture
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
                'objetevaluation' => 'Lorem ipsum dolor sit amet',
                'dateevaluation' => 'Lorem ipsum dolor sit amet',
                'decisiondirection' => 'Lorem ipsum dolor sit amet',
                'categorie_id' => 1,
                'created' => '2023-04-05 09:33:00',
                'modified' => '2023-04-05 09:33:00',
            ],
        ];
        parent::init();
    }
}
