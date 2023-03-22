<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FonctionsFixture
 */
class FonctionsFixture extends TestFixture
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
                'created' => '2023-03-22 14:48:45',
                'modified' => '2023-03-22 14:48:45',
            ],
        ];
        parent::init();
    }
}
