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
                'created' => '2023-05-07 20:03:21',
                'modified' => '2023-05-07 20:03:21',
            ],
        ];
        parent::init();
    }
}
