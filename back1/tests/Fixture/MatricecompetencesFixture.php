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
                'created' => '2023-04-08 16:00:09',
                'modified' => '2023-04-08 16:00:09',
            ],
        ];
        parent::init();
    }
}
