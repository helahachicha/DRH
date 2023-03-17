<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InfogenteckleadsFixture
 */
class InfogenteckleadsFixture extends TestFixture
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
                'refdt' => 'Lorem ipsum dolor sit amet',
                'majndt' => 1,
                'dudt' => '2023-03-17',
                'Fonctiondt' => 'Lorem ipsum dolor sit amet',
                'Categoriedt' => 'Lorem ipsum dolor sit amet',
                'Suphierdt' => 'Lorem ipsum dolor sit amet',
                'Superdt' => 'Lorem ipsum dolor sit amet',
                'Interimdt' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-03-17 11:54:58',
                'modified' => '2023-03-17 11:54:58',
            ],
        ];
        parent::init();
    }
}
