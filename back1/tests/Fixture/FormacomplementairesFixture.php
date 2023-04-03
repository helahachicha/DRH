<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FormacomplementairesFixture
 */
class FormacomplementairesFixture extends TestFixture
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
                'formation' => 'Lorem ipsum dolor sit amet',
                'attestation' => 'Lorem ipsum dolor sit amet',
                'annee' => 'Lorem ipsum dolor sit amet',
                'etablissement' => 'Lorem ipsum dolor sit amet',
                'infoprofessionnelle_id' => 1,
                'created' => '2023-04-03 11:40:44',
                'modified' => '2023-04-03 11:40:44',
            ],
        ];
        parent::init();
    }
}
