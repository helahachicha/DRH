<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * IdproposteFixture
 */
class IdproposteFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'idproposte';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'majn' => 1,
                'du' => '2023-03-14',
                'Fonction' => 'Lorem ipsum dolor sit amet',
                'Categorie' => 'Lorem ipsum dolor sit amet',
                'Suphier' => 'Lorem ipsum dolor sit amet',
                'Super' => 'Lorem ipsum dolor sit amet',
                'Interim' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-03-14 14:13:29',
                'modified' => '2023-03-14 14:13:29',
            ],
        ];
        parent::init();
    }
}
