<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * NoteevaluationsFixture
 */
class NoteevaluationsFixture extends TestFixture
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
                'indicateursuivi_id' => 1,
                'created' => '2023-03-31 08:10:37',
                'modified' => '2023-03-31 08:10:37',
            ],
        ];
        parent::init();
    }
}
