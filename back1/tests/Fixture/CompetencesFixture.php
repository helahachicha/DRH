<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CompetencesFixture
 */
class CompetencesFixture extends TestFixture
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
                'detailprofilposte_id' => 1,
                'created' => '2023-03-23 10:38:02',
                'modified' => '2023-03-23 10:38:02',
            ],
        ];
        parent::init();
    }
}
