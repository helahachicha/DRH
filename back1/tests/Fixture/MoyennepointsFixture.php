<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MoyennepointsFixture
 */
class MoyennepointsFixture extends TestFixture
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
                'moyenne' => 1,
                'employe_id' => 1,
                'pointindicateur_id' => 1,
                'created' => '2023-05-03 14:57:44',
                'modified' => '2023-05-03 14:57:44',
            ],
        ];
        parent::init();
    }
}
