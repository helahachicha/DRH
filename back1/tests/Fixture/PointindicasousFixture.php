<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PointindicasousFixture
 */
class PointindicasousFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'pointindicasous';
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
                'label' => 1,
                'indicasoucompa_id' => 1,
                'employe_id' => 1,
                'created' => '2023-05-04 19:11:36',
                'modified' => '2023-05-04 19:11:36',
            ],
        ];
        parent::init();
    }
}
