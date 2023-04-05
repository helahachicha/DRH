<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DetailprofilpostesFixture
 */
class DetailprofilpostesFixture extends TestFixture
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
                'fonction' => 'Lorem ipsum dolor sit amet',
                'categorie_id' => 1,
                'profilposte_id' => 1,
                'superhierar' => 'Lorem ipsum dolor sit amet',
                'supervision' => 'Lorem ipsum dolor sit amet',
                'interim' => 'Lorem ipsum dolor sit amet',
                'fonctionelaboration' => 'Lorem ipsum dolor sit amet',
                'fonctionverification' => 'Lorem ipsum dolor sit amet',
                'fonctionabrobation' => 'Lorem ipsum dolor sit amet',
                'nomprenomelab' => 'Lorem ipsum dolor sit amet',
                'nomprenomverif' => 'Lorem ipsum dolor sit amet',
                'nomprenomabrob' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-04-04 12:48:47',
                'modified' => '2023-04-04 12:48:47',
            ],
        ];
        parent::init();
    }
}
