<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EnfantsfrFixture
 */
class EnfantsfrFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'enfantsfr';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'ordreen' => 1,
                'prenomen' => 'Lorem ipsum dolor sit amet',
                'datenaien' => '2023-03-16',
                'niveauetudeen' => 'Lorem ipsum dolor sit amet',
                'centreintereten' => 'Lorem ipsum dolor sit amet',
                'etatsanteen' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-03-16 13:21:56',
                'modified' => '2023-03-16 13:21:56',
            ],
        ];
        parent::init();
    }
}
