<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * IndicateursuivisFixture
 */
class IndicateursuivisFixture extends TestFixture
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
                'formcompetence_id' => 1,
                'created' => '2023-04-07 11:06:17',
                'modified' => '2023-04-07 11:06:17',
            ],
        ];
        parent::init();
    }
}
