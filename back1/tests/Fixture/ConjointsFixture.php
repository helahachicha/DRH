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
                'nomprenomep' => 'Lorem ipsum dolor sit amet',
                'datenaissanceep' => '2023-04-18',
                'niveauetudeep' => 'Lorem ipsum dolor sit amet',
                'fonctionep' => 'Lorem ipsum dolor sit amet',
                'etatep' => 'Lorem ipsum dolor sit amet',
                'salaireep' => 1,
                'informationprofessionnelle_id' => 1,
                'created' => '2023-04-18 08:39:51',
                'modified' => '2023-04-18 08:39:51',
            ],
        ];
        parent::init();
    }
}
