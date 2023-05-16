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
                'formcompetence_id' => 1,
                'created' => '2023-05-15 23:58:34',
                'modified' => '2023-05-15 23:58:34',
            ],
        ];
        parent::init();
    }
}
