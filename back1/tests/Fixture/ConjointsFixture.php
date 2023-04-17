<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ConjointsFixture
 */
class ConjointsFixture extends TestFixture
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
                'nomprenom' => 'Lorem ipsum dolor sit amet',
                'datenaissance' => '2023-04-17',
                'niveauetude' => 'Lorem ipsum dolor sit amet',
                'fonction' => 'Lorem ipsum dolor sit amet',
                'etat' => 'Lorem ipsum dolor sit amet',
                'salaire' => 1,
                'informationprofessionnelle_id' => 1,
                'created' => '2023-04-17 14:14:36',
                'modified' => '2023-04-17 14:14:36',
            ],
        ];
        parent::init();
    }
}
