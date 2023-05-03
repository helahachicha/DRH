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
                'detailprofilposte_id' => 1,
                'competence_id' => 1,
                'niveauvise_id' => 1,
                'created' => '2023-05-02 21:32:50',
                'modified' => '2023-05-02 21:32:50',
            ],
        ];
        parent::init();
    }
}
