<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PointindicateursFixture
 */
class PointindicateursFixture extends TestFixture
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
                'label' => 1,
                'indicateursuivi_id' => 1,
                'employe_id' => 1,
                'created' => '2023-05-03 09:47:08',
                'modified' => '2023-05-03 09:47:08',
            ],
        ];
        parent::init();
    }
}
