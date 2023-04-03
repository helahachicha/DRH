<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ExpprofessionnellesFixture
 */
class ExpprofessionnellesFixture extends TestFixture
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
                'societe' => 'Lorem ipsum dolor sit amet',
                'periode' => '2023-04-03',
                'fonction' => 'Lorem ipsum dolor sit amet',
                'initiative' => 'Lorem ipsum dolor sit amet',
                'salaire' => 1,
                'infoprofessionnelle_id' => 1,
                'created' => '2023-04-03 11:41:13',
                'modified' => '2023-04-03 11:41:13',
            ],
        ];
        parent::init();
    }
}
