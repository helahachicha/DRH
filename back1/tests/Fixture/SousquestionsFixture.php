<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SousquestionsFixture
 */
class SousquestionsFixture extends TestFixture
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
                'labelsousquestions' => 'Lorem ipsum dolor sit amet',
                'question_id' => 1,
                'created' => '2023-03-30 07:46:05',
                'modified' => '2023-03-30 07:46:05',
            ],
        ];
        parent::init();
    }
}
