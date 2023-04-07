<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * NoteevaluationsFixture
 */
class NoteevaluationsFixture extends TestFixture
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
                'point_id' => 1,
                'formcompetence_id' => 1,
                'created' => '2023-04-07 10:16:11',
                'modified' => '2023-04-07 10:16:11',
            ],
        ];
        parent::init();
    }
}
