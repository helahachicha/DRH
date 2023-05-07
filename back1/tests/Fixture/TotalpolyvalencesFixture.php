<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TotalpolyvalencesFixture
 */
class TotalpolyvalencesFixture extends TestFixture
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
                'created' => '2023-05-07 19:40:52',
                'modified' => '2023-05-07 19:40:52',
            ],
        ];
        parent::init();
    }
}
