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
                'point' => 1,
                'formcompetence_id' => 1,
                'created' => '2023-04-06 09:24:28',
                'modified' => '2023-04-06 09:24:28',
            ],
        ];
        parent::init();
    }
}
