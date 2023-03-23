<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProfilpostesFixture
 */
class ProfilpostesFixture extends TestFixture
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
                'nom' => 'Lorem ipsum dolor sit amet',
                'categorie' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-03-23 11:55:15',
                'modified' => '2023-03-23 11:55:15',
            ],
        ];
        parent::init();
    }
}
