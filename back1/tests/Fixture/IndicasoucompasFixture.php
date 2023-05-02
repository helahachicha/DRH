<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * IndicasoucompasFixture
 */
class IndicasoucompasFixture extends TestFixture
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
                'souscompetence_id' => 1,
                'detailprofilposte_id' => 1,
                'created' => '2023-04-28 09:43:34',
                'modified' => '2023-04-28 09:43:34',
            ],
        ];
        parent::init();
    }
}
