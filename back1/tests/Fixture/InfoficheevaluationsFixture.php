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
                'dateevaluation' => '2023-03-31',
                'decisiondirection' => 'Lorem ipsum dolor sit amet',
                'categorie_id' => 1,
                'created' => '2023-03-31 09:24:47',
                'modified' => '2023-03-31 09:24:47',
            ],
        ];
        parent::init();
    }
}
