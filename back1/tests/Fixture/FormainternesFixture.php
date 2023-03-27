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
                'themeformation_id' => 1,
                'animateur' => 'Lorem ipsum dolor sit amet',
                'poste' => 'Lorem ipsum dolor sit amet',
                'date' => '2023-03-27',
                'hentrer' => '08:57:12',
                'hsortie' => '08:57:12',
                'created' => '2023-03-27 08:57:12',
                'modified' => '2023-03-27 08:57:12',
            ],
        ];
        parent::init();
    }
}
