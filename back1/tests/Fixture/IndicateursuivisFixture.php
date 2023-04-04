<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * IndicateursuivisFixture
 */
class IndicateursuivisFixture extends TestFixture
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
                'competence_id' => 1,
                'soucompetence' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-04-04 11:18:04',
                'modified' => '2023-04-04 11:18:04',
            ],
        ];
        parent::init();
    }
}
