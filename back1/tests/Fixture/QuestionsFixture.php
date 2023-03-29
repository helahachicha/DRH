<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * QuestionsFixture
 */
class QuestionsFixture extends TestFixture
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
                'label2' => 'Lorem ipsum dolor sit amet',
                'comptechnique_id' => 1,
                'created' => '2023-03-29 13:30:05',
                'modified' => '2023-03-29 13:30:05',
            ],
        ];
        parent::init();
    }
}
