<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ExpproffrsFixture
 */
class ExpproffrsFixture extends TestFixture
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
                'societeex' => 'Lorem ipsum dolor sit amet',
                'duauex' => 'Lorem ipsum dolor sit amet',
                'fonctionex' => 'Lorem ipsum dolor sit amet',
                'inidiffex' => 'Lorem ipsum dolor sit amet',
                'salaireex' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-03-17 09:38:54',
                'modified' => '2023-03-17 09:38:54',
            ],
        ];
        parent::init();
    }
}
