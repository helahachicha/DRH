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
                'superhierar' => 'Lorem ipsum dolor sit amet',
                'supervision' => 'Lorem ipsum dolor sit amet',
                'interim' => 'Lorem ipsum dolor sit amet',
                'competence' => 'Lorem ipsum dolor sit amet',
                'souscompetence' => 'Lorem ipsum dolor sit amet',
                'niveauvise' => 'Lorem ipsum dolor sit amet',
                'indicateursuivi' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'fonctionelaboration' => 'Lorem ipsum dolor sit amet',
                'fonctionverification' => 'Lorem ipsum dolor sit amet',
                'fonctionabrobation' => 'Lorem ipsum dolor sit amet',
                'nomprenomelab' => 'Lorem ipsum dolor sit amet',
                'nomprenomverif' => 'Lorem ipsum dolor sit amet',
                'nomprenomabrob' => 'Lorem ipsum dolor sit amet',
                'profilposte_id' => 1,
                'created' => '2023-03-26 18:54:44',
                'modified' => '2023-03-26 18:54:44',
            ],
        ];
        parent::init();
    }
}
