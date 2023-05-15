<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ScorecompetencesFixture
 */
class ScorecompetencesFixture extends TestFixture
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
                'employe_id' => 1,
                'competence_id' => 1,
                'score' => 1,
                'created' => '2023-05-15 13:26:21',
                'modified' => '2023-05-15 13:26:21',
            ],
        ];
        parent::init();
    }
}
