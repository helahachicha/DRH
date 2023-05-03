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
                'objetevaluation' => 'Lorem ipsum dolor sit amet',
                'dateevaluation' => 'Lorem ipsum dolor sit amet',
                'decisiondirection' => 'Lorem ipsum dolor sit amet',
                'employe_id' => 1,
                'created' => '2023-05-03 13:09:11',
                'modified' => '2023-05-03 13:09:11',
            ],
        ];
        parent::init();
    }
}
