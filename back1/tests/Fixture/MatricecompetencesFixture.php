<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MatricecompetencesFixture
 */
class MatricecompetencesFixture extends TestFixture
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
                'label' => 'Lorem ipsum dolor sit amet',
                'abreviation' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-05-07 22:39:21',
                'modified' => '2023-05-07 22:39:21',
            ],
        ];
        parent::init();
    }
}
