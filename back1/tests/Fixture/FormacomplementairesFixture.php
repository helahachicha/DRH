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
                'anne' => 'Lorem ipsum dolor sit amet',
                'etablissements' => 'Lorem ipsum dolor sit amet',
                'informationprofessionnelle_id' => 1,
                'created' => '2023-04-18 08:46:03',
                'modified' => '2023-04-18 08:46:03',
            ],
        ];
        parent::init();
    }
}
