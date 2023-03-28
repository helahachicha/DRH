<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ComptechniquesFixture
 */
class ComptechniquesFixture extends TestFixture
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
                'testtechnique_id' => 1,
                'created' => '2023-03-28 08:44:28',
                'modified' => '2023-03-28 08:44:28',
            ],
        ];
        parent::init();
    }
}
