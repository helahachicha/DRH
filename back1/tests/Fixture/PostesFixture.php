<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PostesFixture
 */
class PostesFixture extends TestFixture
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
                'departement_id' => 1,
                'created' => '2023-03-30 14:09:45',
                'modified' => '2023-03-30 14:09:45',
            ],
        ];
        parent::init();
    }
}
