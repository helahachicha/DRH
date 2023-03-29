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
                'label1' => 'Lorem ipsum dolor sit amet',
                'departement_id' => 1,
                'created' => '2023-03-29 13:38:14',
                'modified' => '2023-03-29 13:38:14',
            ],
        ];
        parent::init();
    }
}
