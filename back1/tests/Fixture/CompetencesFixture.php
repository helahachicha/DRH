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
                'categorie_id' => 1,
                'created' => '2023-03-27 13:28:35',
                'modified' => '2023-03-27 13:28:35',
            ],
        ];
        parent::init();
    }
}
