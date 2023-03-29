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
                'label4' => 'Lorem ipsum dolor sit amet',
                'competence_id' => 1,
                'created' => '2023-03-29 13:39:55',
                'modified' => '2023-03-29 13:39:55',
            ],
        ];
        parent::init();
    }
}
