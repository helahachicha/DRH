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
                'pointforce' => 'Lorem ipsum dolor sit amet',
                'pointameliore' => 'Lorem ipsum dolor sit amet',
                'infoprofessionnelle_id' => 1,
                'created' => '2023-04-03 11:39:08',
                'modified' => '2023-04-03 11:39:08',
            ],
        ];
        parent::init();
    }
}
