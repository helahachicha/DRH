<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MatricesFixture
 */
class MatricesFixture extends TestFixture
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
                'note' => 'Lorem ipsum dolor sit amet',
                'employe_id' => 1,
                'matricecompetence_id' => 1,
                'created' => '2023-04-08 16:18:43',
                'modified' => '2023-04-08 16:18:43',
            ],
        ];
        parent::init();
    }
}
