<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FormcompetencesFixture
 */
class FormcompetencesFixture extends TestFixture
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
                'competence_id' => 1,
                'soucompetence' => 'Lorem ipsum dolor sit amet',
                'niveauvise_id' => 1,
                'detailprofilposte_id' => 1,
                'created' => '2023-04-07 09:45:29',
                'modified' => '2023-04-07 09:45:29',
            ],
        ];
        parent::init();
    }
}
