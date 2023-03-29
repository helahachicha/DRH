<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TesttechniquesFixture
 */
class TesttechniquesFixture extends TestFixture
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
                'created' => '2023-03-29 10:09:43',
                'modified' => '2023-03-29 10:09:43',
            ],
        ];
        parent::init();
    }
}
