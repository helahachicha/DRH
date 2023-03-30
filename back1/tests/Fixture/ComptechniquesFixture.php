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
                'created' => '2023-03-30 08:46:36',
                'modified' => '2023-03-30 08:46:36',
            ],
        ];
        parent::init();
    }
}
