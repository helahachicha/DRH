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
                'created' => '2023-03-30 14:07:10',
                'modified' => '2023-03-30 14:07:10',
            ],
        ];
        parent::init();
    }
}
