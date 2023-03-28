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
                'label' => 'Lorem ipsum dolor sit amet',
                'comptechnique_id' => 1,
                'created' => '2023-03-28 08:28:35',
                'modified' => '2023-03-28 08:28:35',
            ],
        ];
        parent::init();
    }
}
