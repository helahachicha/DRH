<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProfilpostesFixture
 */
class ProfilpostesFixture extends TestFixture
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
                'nom' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-03-21 17:09:55',
                'modified' => '2023-03-21 17:09:55',
            ],
        ];
        parent::init();
    }
}
