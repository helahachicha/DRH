<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InfogenconfirmesFixture
 */
class InfogenconfirmesFixture extends TestFixture
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
                'majndc' => 1,
                'dudc' => '2023-03-21',
                'Fonctiondc' => 'Lorem ipsum dolor sit amet',
                'categoriedc' => 'Lorem ipsum dolor sit amet',
                'Suphierdc' => 'Lorem ipsum dolor sit amet',
                'Superdc' => 'Lorem ipsum dolor sit amet',
                'interidc' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-03-21 09:50:08',
                'modified' => '2023-03-21 09:50:08',
            ],
        ];
        parent::init();
    }
}
