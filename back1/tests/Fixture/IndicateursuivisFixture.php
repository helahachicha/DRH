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
                'label6' => 'Lorem ipsum dolor sit amet',
                'souscompetence_id' => 1,
                'created' => '2023-03-29 13:40:10',
                'modified' => '2023-03-29 13:40:10',
            ],
        ];
        parent::init();
    }
}
