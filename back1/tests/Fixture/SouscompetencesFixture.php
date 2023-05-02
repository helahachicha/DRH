<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SouscompetencesFixture
 */
class SouscompetencesFixture extends TestFixture
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
                'competence_id' => 1,
                'detailprofilposte_id' => 1,
                'created' => '2023-04-28 08:20:20',
                'modified' => '2023-04-28 08:20:20',
            ],
        ];
        parent::init();
    }
}
