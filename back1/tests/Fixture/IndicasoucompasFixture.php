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
                'created' => '2023-04-15 08:36:47',
                'modified' => '2023-04-15 08:36:47',
            ],
        ];
        parent::init();
    }
}
