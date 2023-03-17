<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FormacomplfrFixture
 */
class FormacomplfrFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'formacomplfr';
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
                'formationf' => 'Lorem ipsum dolor sit amet',
                'attestationf' => 'Lorem ipsum dolor sit amet',
                'anneef' => 'Lorem ipsum dolor sit amet',
                'etablissementf' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-03-16 14:06:51',
                'modified' => '2023-03-16 14:06:51',
            ],
        ];
        parent::init();
    }
}
