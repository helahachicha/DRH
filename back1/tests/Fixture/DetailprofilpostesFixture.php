<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DetailprofilpostesFixture
 */
class DetailprofilpostesFixture extends TestFixture
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
                'fonction' => 'Lorem ipsum dolor sit amet',
                'categorie' => 'Lorem ipsum dolor sit amet',
                'superhierar' => 'Lorem ipsum dolor sit amet',
                'supervision' => 'Lorem ipsum dolor sit amet',
                'interim' => 'Lorem ipsum dolor sit amet',
                'profilposte_id' => 1,
                'created' => '2023-03-23 11:54:53',
                'modified' => '2023-03-23 11:54:53',
            ],
        ];
        parent::init();
    }
}
