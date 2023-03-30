<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * NoteindicateursFixture
 */
class NoteindicateursFixture extends TestFixture
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
                'point' => 1,
                'souscompetence_id' => 1,
                'created' => '2023-03-30 20:02:37',
                'modified' => '2023-03-30 20:02:37',
            ],
        ];
        parent::init();
    }
}
