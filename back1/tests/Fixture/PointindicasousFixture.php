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
                'souscompetence_id' => 1,
                'competence_id' => 1,
                'employe_id' => 1,
                'created' => '2023-05-03 09:32:18',
                'modified' => '2023-05-03 09:32:18',
            ],
        ];
        parent::init();
    }
}
