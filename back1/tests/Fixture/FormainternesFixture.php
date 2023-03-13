<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FormainternesFixture
 */
class FormainternesFixture extends TestFixture
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
                'tycomp' => 'Lorem ipsum dolor sit amet',
                'themforma' => 'Lorem ipsum dolor sit amet',
                'animateur' => 'Lorem ipsum dolor sit amet',
                'poste' => 'Lorem ipsum dolor sit amet',
                'date' => '2023-03-13 21:37:02',
                'hentrer' => 'Lorem ipsum dolor sit amet',
                'hsortie' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-03-13 21:37:02',
                'modified' => '2023-03-13 21:37:02',
            ],
        ];
        parent::init();
    }
}
