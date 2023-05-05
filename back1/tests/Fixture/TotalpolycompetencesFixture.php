<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TotalpolycompetencesFixture
 */
class TotalpolycompetencesFixture extends TestFixture
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
                'valeur' => 1,
                'created' => '2023-04-11 07:21:55',
                'modified' => '2023-04-11 07:21:55',
            ],
        ];
        parent::init();
    }
}
