<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ScoresouscompsFixture
 */
class ScoresouscompsFixture extends TestFixture
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
                'souscompetence_id' => 1,
                'score' => 1,
                'created' => '2023-05-15 13:26:38',
                'modified' => '2023-05-15 13:26:38',
            ],
        ];
        parent::init();
    }
}
