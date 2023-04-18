<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ActiviteloisirsFixture
 */
class ActiviteloisirsFixture extends TestFixture
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
                'activitesportive' => 'Lorem ipsum dolor sit amet',
                'lequelactsportive' => 'Lorem ipsum dolor sit amet',
                'activitecreative' => 'Lorem ipsum dolor sit amet',
                'activiteinventivite' => 'Lorem ipsum dolor sit amet',
                'activitecorporelle' => 'Lorem ipsum dolor sit amet',
                'jeureflexion' => 'Lorem ipsum dolor sit amet',
                'exerceractivite' => 'Lorem ipsum dolor sit amet',
                'pourquoiexercer' => 'Lorem ipsum dolor sit amet',
                'sallesport' => 'Lorem ipsum dolor sit amet',
                'disposallesport' => 'Lorem ipsum dolor sit amet',
                'activitebenevolat' => 'Lorem ipsum dolor sit amet',
                'lequelactbenevolat' => 'Lorem ipsum dolor sit amet',
                'lieuactbenevolat' => 'Lorem ipsum dolor sit amet',
                'exerceractbenevolat' => 'Lorem ipsum dolor sit amet',
                'informationprofessionnelle_id' => 1,
                'created' => '2023-04-17 14:14:26',
                'modified' => '2023-04-17 14:14:26',
            ],
        ];
        parent::init();
    }
}
