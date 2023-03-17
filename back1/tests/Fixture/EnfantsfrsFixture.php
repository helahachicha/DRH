<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EnfantsfrsFixture
 */
class EnfantsfrsFixture extends TestFixture
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
                'ordreen' => 1,
                'prenomen' => 'Lorem ipsum dolor sit amet',
                'datenaien' => '2023-03-17',
                'niveauetudeen' => 'Lorem ipsum dolor sit amet',
                'centreintereten' => 'Lorem ipsum dolor sit amet',
                'etatsanteen' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-03-17 09:33:55',
                'modified' => '2023-03-17 09:33:55',
            ],
        ];
        parent::init();
    }
}
