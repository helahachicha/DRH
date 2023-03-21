<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FecomporganisationsFixture
 */
class FecomporganisationsFixture extends TestFixture
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
                'numeroco' => 1,
                'indimesureco' => 'Lorem ipsum dolor sit amet',
                'pointsco' => 1,
                'created' => '2023-03-21 05:27:22',
                'modified' => '2023-03-21 05:27:22',
            ],
        ];
        parent::init();
    }
}
