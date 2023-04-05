<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * NiveauvisesFixture
 */
class NiveauvisesFixture extends TestFixture
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
                'label' => 'Lorem ipsum dolor sit amet',
                'categorie_id' => 1,
                'created' => '2023-04-05 10:16:52',
                'modified' => '2023-04-05 10:16:52',
            ],
        ];
        parent::init();
    }
}
