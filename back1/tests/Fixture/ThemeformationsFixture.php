<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ThemeformationsFixture
 */
class ThemeformationsFixture extends TestFixture
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
                'created' => '2023-03-27 12:16:41',
                'modified' => '2023-03-27 12:16:41',
            ],
        ];
        parent::init();
    }
}
