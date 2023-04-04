<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InfoprofessionnellesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InfoprofessionnellesTable Test Case
 */
class InfoprofessionnellesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InfoprofessionnellesTable
     */
    protected $Infoprofessionnelles;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Infoprofessionnelles',
        'app.Activiteloisirfrs',
        'app.Casmariages',
        'app.Enfants',
        'app.Expprofessionnelles',
        'app.Formacademiques',
        'app.Formacomplementaires',
        'app.Infopersonnelles',
        'app.Langues',
        'app.Points',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Infoprofessionnelles') ? [] : ['className' => InfoprofessionnellesTable::class];
        $this->Infoprofessionnelles = $this->getTableLocator()->get('Infoprofessionnelles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Infoprofessionnelles);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\InfoprofessionnellesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
