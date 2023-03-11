<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CoutformaexternesFixture
 */
class CoutformaexternesFixture extends TestFixture
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
                'coutformahd' => 1,
                'tocoformadt' => 1,
                'locaespace' => 1,
                'comax' => 1,
                'tocout' => 1,
                'chargeto' => 1,
                'created' => '2023-03-11 21:46:55',
                'modified' => '2023-03-11 21:46:55',
            ],
        ];
        parent::init();
    }
}
