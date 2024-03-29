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
                'created' => '2023-05-02 11:47:43',
                'modified' => '2023-05-02 11:47:43',
            ],
        ];
        parent::init();
    }
}
