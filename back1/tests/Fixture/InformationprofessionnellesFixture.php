<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InformationprofessionnellesFixture
 */
class InformationprofessionnellesFixture extends TestFixture
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
                'adresse' => 'Lorem ipsum dolor sit amet',
                'telprofessionnel' => 1,
                'telpersonnel' => 1,
                'contact' => 1,
                'mailprofessionnel' => 'Lorem ipsum dolor sit amet',
                'mailpersonnel' => 'Lorem ipsum dolor sit amet',
                'service' => 'Lorem ipsum dolor sit amet',
                'poste' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-04-17 14:12:05',
                'modified' => '2023-04-17 14:12:05',
            ],
        ];
        parent::init();
    }
}
