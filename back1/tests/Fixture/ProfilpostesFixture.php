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
                'poste_id' => 1,
                'created' => '2023-03-31 12:06:58',
                'modified' => '2023-03-31 12:06:58',
            ],
        ];
        parent::init();
    }
}
