<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * IdpropostedcFixture
 */
class IdpropostedcFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'idpropostedc';
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
                'man' => 1,
                'duu' => '2023-03-15',
                'fonct' => 'Lorem ipsum dolor sit amet',
                'categori' => 'Lorem ipsum dolor sit amet',
                'supehiera' => 'Lorem ipsum dolor sit amet',
                'supervis' => 'Lorem ipsum dolor sit amet',
                'interi' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-03-15 13:28:53',
                'modified' => '2023-03-15 13:28:53',
            ],
        ];
        parent::init();
    }
}
