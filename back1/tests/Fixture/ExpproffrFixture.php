<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ExpproffrFixture
 */
class ExpproffrFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'expproffr';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idex' => 1,
                'societeex' => 'Lorem ipsum dolor sit amet',
                'duauex' => 'Lorem ipsum dolor sit amet',
                'fonctionex' => 'Lorem ipsum dolor sit amet',
                'inidiffex' => 'Lorem ipsum dolor sit amet',
                'salaireex' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-03-16 13:46:25',
                'modified' => '2023-03-16 13:46:25',
            ],
        ];
        parent::init();
    }
}
