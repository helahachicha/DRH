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
                'labelquestions' => 'Lorem ipsum dolor sit amet',
                'comptechnique_id' => 1,
                'created' => '2023-03-30 07:45:11',
                'modified' => '2023-03-30 07:45:11',
            ],
        ];
        parent::init();
    }
}
