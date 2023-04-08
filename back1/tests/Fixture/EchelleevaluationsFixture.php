<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EchelleevaluationsFixture
 */
class EchelleevaluationsFixture extends TestFixture
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
                'label' => 'Lorem ipsum dolor sit amet',
                'abreviation' => 'Lorem ipsum dolor sit amet',
                'valeur' => 1,
                'created' => '2023-04-08 15:35:58',
                'modified' => '2023-04-08 15:35:58',
            ],
        ];
        parent::init();
    }
}
