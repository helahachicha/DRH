<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PolyvalencesFixture
 */
class PolyvalencesFixture extends TestFixture
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
                'valeur' => 'Lorem ipsum dolor sit amet',
                'matricecompetence_id' => 1,
                'created' => '2023-04-10 22:20:21',
                'modified' => '2023-04-10 22:20:21',
            ],
        ];
        parent::init();
    }
}
