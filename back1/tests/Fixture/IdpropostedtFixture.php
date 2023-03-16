<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * IdpropostedtFixture
 */
class IdpropostedtFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'idpropostedt';
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
                'refdt' => 'Lorem ipsum dolor sit amet',
                'majndt' => 1,
                'dudt' => '2023-03-16',
                'Fonctiondt' => 'Lorem ipsum dolor sit amet',
                'Categoriedt' => 'Lorem ipsum dolor sit amet',
                'Suphierdt' => 'Lorem ipsum dolor sit amet',
                'Superdt' => 'Lorem ipsum dolor sit amet',
                'Interimdt' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-03-16 09:28:41',
                'modified' => '2023-03-16 09:28:41',
            ],
        ];
        parent::init();
    }
}
