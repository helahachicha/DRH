<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProfilposteFixture
 */
class ProfilposteFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'profilposte';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'ct' => 'Lorem ipsum dolor sit amet',
                'contenuct' => 'Lorem ipsum dolor sit amet',
                'co' => 'Lorem ipsum dolor sit amet',
                'gt' => 'Lorem ipsum dolor sit amet',
                'nivvisegt' => 'Lorem ipsum dolor sit amet',
                'isuivigt' => 'Lorem ipsum dolor sit amet',
                'cc' => 'Lorem ipsum dolor sit amet',
                'ge' => 'Lorem ipsum dolor sit amet',
                'au' => 'Lorem ipsum dolor sit amet',
                'po' => 'Lorem ipsum dolor sit amet',
                'ci' => 'Lorem ipsum dolor sit amet',
                'nivviseci' => 'Lorem ipsum dolor sit amet',
                'isuivici' => 'Lorem ipsum dolor sit amet',
                'tc' => 'Lorem ipsum dolor sit amet',
                'nivvisetc' => 'Lorem ipsum dolor sit amet',
                'isuivitc' => 'Lorem ipsum dolor sit amet',
                'rp' => 'Lorem ipsum dolor sit amet',
                'nivviserp' => 'Lorem ipsum dolor sit amet',
                'isuivirp' => 'Lorem ipsum dolor sit amet',
                'se' => 'Lorem ipsum dolor sit amet',
                'nivvisese' => 'Lorem ipsum dolor sit amet',
                'isuivise' => 'Lorem ipsum dolor sit amet',
                'dr' => 'Lorem ipsum dolor sit amet',
                'contenudroit' => 'Lorem ipsum dolor sit amet',
                'dev' => 'Lorem ipsum dolor sit amet',
                'contenudev' => 'Lorem ipsum dolor sit amet',
                'validation' => 'Lorem ipsum dolor sit amet',
                'fonc' => 'Lorem ipsum dolor sit amet',
                'np' => 'Lorem ipsum dolor sit amet',
                'fonc1' => 'Lorem ipsum dolor sit amet',
                'np1' => 'Lorem ipsum dolor sit amet',
                'fonc2' => 'Lorem ipsum dolor sit amet',
                'np2' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
