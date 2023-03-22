<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InterimsFixture
 */
class InterimsFixture extends TestFixture
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
                'label' => 'Lorem ipsum dolor sit amet',
                'categoriedev_id' => 1,
                'created' => '2023-03-22 20:24:55',
                'modified' => '2023-03-22 20:24:55',
            ],
        ];
        parent::init();
    }
}
