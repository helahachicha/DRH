<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LanguesFixture
 */
class LanguesFixture extends TestFixture
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
                'arabe' => 'Lorem ipsum dolor sit amet',
                'francais' => 'Lorem ipsum dolor sit amet',
                'anglais' => 'Lorem ipsum dolor sit amet',
                'autre' => 'Lorem ipsum dolor sit amet',
                'infoprofessionnelle_id' => 1,
                'created' => '2023-04-03 11:41:40',
                'modified' => '2023-04-03 11:41:40',
            ],
        ];
        parent::init();
    }
}
