<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * IdpropostedsFixture
 */
class IdpropostedsFixture extends TestFixture
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
                'majnds' => 1,
                'duds' => '2023-03-15',
                'Fonctionds' => 'Lorem ipsum dolor sit amet',
                'Categorieds' => 'Lorem ipsum dolor sit amet',
                'Suphierds' => 'Lorem ipsum dolor sit amet',
                'Superds' => 'Lorem ipsum dolor sit amet',
                'Interimds' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-03-15 15:09:25',
                'modified' => '2023-03-15 15:09:25',
            ],
        ];
        parent::init();
    }
}
