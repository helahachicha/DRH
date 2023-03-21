<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FecomminterasFixture
 */
class FecomminterasFixture extends TestFixture
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
                'numeroci' => 1,
                'indimesureci' => 'Lorem ipsum dolor sit amet',
                'pointsci' => 1,
                'created' => '2023-03-21 05:25:51',
                'modified' => '2023-03-21 05:25:51',
            ],
        ];
        parent::init();
    }
}
