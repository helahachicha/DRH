<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InfogencatppsFixture
 */
class InfogencatppsFixture extends TestFixture
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
                'label' => 'Lorem ipsum dolor sit amet',
                'suphierar' => 'Lorem ipsum dolor sit amet',
                'supervision' => 'Lorem ipsum dolor sit amet',
                'interim' => 'Lorem ipsum dolor sit amet',
                'categorie_id' => 1,
                'created' => '2023-03-21 21:32:37',
                'modified' => '2023-03-21 21:32:37',
            ],
        ];
        parent::init();
    }
}
