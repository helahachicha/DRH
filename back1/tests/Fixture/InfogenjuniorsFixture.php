<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InfogenjuniorsFixture
 */
class InfogenjuniorsFixture extends TestFixture
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
                'majn' => 1,
                'du' => '2023-03-17',
                'Fonction' => 'Lorem ipsum dolor sit amet',
                'Categorie' => 'Lorem ipsum dolor sit amet',
                'Suphier' => 'Lorem ipsum dolor sit amet',
                'Super' => 'Lorem ipsum dolor sit amet',
                'Interim' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-03-17 10:05:35',
                'modified' => '2023-03-17 10:05:35',
            ],
        ];
        parent::init();
    }
}
