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
                'label3' => 'Lorem ipsum dolor sit amet',
                'categorie_id' => 1,
                'created' => '2023-03-29 13:39:41',
                'modified' => '2023-03-29 13:39:41',
            ],
        ];
        parent::init();
    }
}
