<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmployesFixture
 */
class EmployesFixture extends TestFixture
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
                'nomprenom' => 'Lorem ipsum dolor sit amet',
                'categorie_id' => 1,
                'created' => '2023-05-02 21:34:10',
                'modified' => '2023-05-02 21:34:10',
            ],
        ];
        parent::init();
    }
}
