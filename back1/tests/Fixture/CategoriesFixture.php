<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CategoriesFixture
 */
class CategoriesFixture extends TestFixture
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
                'profilposte_id' => 1,
                'created' => '2023-03-27 12:08:09',
                'modified' => '2023-03-27 12:08:09',
            ],
        ];
        parent::init();
    }
}
