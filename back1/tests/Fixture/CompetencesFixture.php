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
                'created' => '2023-05-15 23:51:23',
                'modified' => '2023-05-15 23:51:23',
            ],
        ];
        parent::init();
    }
}
