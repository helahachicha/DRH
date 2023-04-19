<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InformationprofessionnellesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InformationprofessionnellesTable Test Case
 */
class InformationprofessionnellesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InformationprofessionnellesTable
     */
    protected $Informationprofessionnelles;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Informationprofessionnelles',
        'app.Activiteloisirs',
        'app.Conjoints',
        'app.Enfants',
        'app.Experienceprofessionnelles',
        'app.Formaacademiques',
        'app.Formacomplementaires',
        'app.Informationpersonnelles',
        'app.Langues',
        'app.Performances',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Informationprofessionnelles') ? [] : ['className' => InformationprofessionnellesTable::class];
        $this->Informationprofessionnelles = $this->getTableLocator()->get('Informationprofessionnelles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Informationprofessionnelles);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\InformationprofessionnellesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
