<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PolycompetencesFixture
 */
class PolycompetencesFixture extends TestFixture
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
                'employe_id' => 1,
                'created' => '2023-04-12 08:20:58',
                'modified' => '2023-04-12 08:20:58',
            ],
        ];
        parent::init();
    }
}
