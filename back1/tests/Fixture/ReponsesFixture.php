<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ReponsesFixture
 */
class ReponsesFixture extends TestFixture
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
                'question_id' => 1,
                'created' => '2023-03-31 07:52:57',
                'modified' => '2023-03-31 07:52:57',
            ],
        ];
        parent::init();
    }
}
