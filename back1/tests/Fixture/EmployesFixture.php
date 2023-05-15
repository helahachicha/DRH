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
                'objetevaluation' => 'Lorem ipsum dolor sit amet',
                'dateevaluation' => '2023-05-15 13:56:51',
                'decisiondirection' => 'Lorem ipsum dolor sit amet',
                'categorie_id' => 1,
                'infoemploye_id' => 1,
                'created' => '2023-05-15 13:56:51',
                'modified' => '2023-05-15 13:56:51',
            ],
        ];
        parent::init();
    }
}
