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
                'categoriede_id' => 1,
                'created' => '2023-03-22 15:11:53',
                'modified' => '2023-03-22 15:11:53',
            ],
        ];
        parent::init();
    }
}
