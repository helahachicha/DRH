<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FicherenseignementFixture
 */
class FicherenseignementFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'ficherenseignement';
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
                'datefr' => '2023-03-17',
                'npagefr' => 1,
                'nomprenomfr' => 'Lorem ipsum dolor sit amet',
                'adressefr' => 'Lorem ipsum dolor sit amet',
                'telprofefr' => 1,
                'telpersofr' => 1,
                'cantactcasurgfr' => 1,
                'mailprofefr' => 'Lorem ipsum dolor sit amet',
                'mailpersfr' => 'Lorem ipsum dolor sit amet',
                'servicetrafr' => 'Lorem ipsum dolor sit amet',
                'postefr' => 'Lorem ipsum dolor sit amet',
                'datenaifr' => '2023-03-17',
                'lieufr' => 'Lorem ipsum dolor sit amet',
                'nationalitefr' => 'Lorem ipsum dolor sit amet',
                'ncinfr' => 1,
                'ncindelivreefr' => 'Lorem ipsum dolor sit amet',
                'ncinlefr' => '2023-03-17',
                'ouipermisfr' => 'Lorem ipsum dolor sit amet',
                'tempsdotramfr' => 1,
                'tempsdotrahfr' => 1,
                'ouimdquandfr' => 'Lorem ipsum dolor sit amet',
                'ouisallesportfr' => 'Lorem ipsum dolor sit amet',
                'critereenfancefr' => 'Lorem ipsum dolor sit amet',
                'beaumomentfr' => 'Lorem ipsum dolor sit amet',
                'mauvaismometfr' => 'Lorem ipsum dolor sit amet',
                'pointforcefr' => 'Lorem ipsum dolor sit amet',
                'pointameliorefr' => 'Lorem ipsum dolor sit amet',
                'npepouxfr' => 'Lorem ipsum dolor sit amet',
                'datnaiepfr' => '2023-03-17',
                'niveauetudepfr' => 'Lorem ipsum dolor sit amet',
                'fonctionepfr' => 'Lorem ipsum dolor sit amet',
                'salaireepfr' => 1,
                'etatepouxfr' => 'Lorem ipsum dolor sit amet',
                'specialitefr1' => 'Lorem ipsum dolor sit amet',
                'specialitefr2' => 'Lorem ipsum dolor sit amet',
                'specialitefr3' => 'Lorem ipsum dolor sit amet',
                'specialitefr4' => 'Lorem ipsum dolor sit amet',
                'anneefr1' => 'Lorem ipsum dolor sit amet',
                'anneefr2' => 'Lorem ipsum dolor sit amet',
                'anneefr3' => 'Lorem ipsum dolor sit amet',
                'anneefr4' => 'Lorem ipsum dolor sit amet',
                'etablissfr1' => 'Lorem ipsum dolor sit amet',
                'etablissfr2' => 'Lorem ipsum dolor sit amet',
                'etablissfr3' => 'Lorem ipsum dolor sit amet',
                'etablissfr4' => 'Lorem ipsum dolor sit amet',
                'ouiactbenefr' => 'Lorem ipsum dolor sit amet',
                'lieuactbenefr' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-03-17 08:24:38',
                'modified' => '2023-03-17 08:24:38',
            ],
        ];
        parent::init();
    }
}
