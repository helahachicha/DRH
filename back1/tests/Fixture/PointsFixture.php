<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PointsFixture
 */
class PointsFixture extends TestFixture
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
                'label' => 1,
                'created' => '2023-04-07 10:15:30',
                'modified' => '2023-04-07 10:15:30',
            ],
        ];
        parent::init();
    }
}
