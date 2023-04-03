<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CasmariagesFixture
 */
class CasmariagesFixture extends TestFixture
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
                'datenep' => '2023-04-03',
                'niveauetudeep' => 'Lorem ipsum dolor sit amet',
                'fonctionep' => 'Lorem ipsum dolor sit amet',
                'salaireep' => 1,
                'etatep' => 'Lorem ipsum dolor sit amet',
                'infoprofessionnelle_id' => 1,
                'created' => 1,
                'modified' => 1,
            ],
        ];
        parent::init();
    }
}
