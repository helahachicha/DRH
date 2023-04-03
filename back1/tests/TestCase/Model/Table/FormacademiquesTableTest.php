<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FormacademiquesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FormacademiquesTable Test Case
 */
class FormacademiquesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FormacademiquesTable
     */
    protected $Formacademiques;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Formacademiques',
        'app.Infoprofessionnelles',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Formacademiques') ? [] : ['className' => FormacademiquesTable::class];
        $this->Formacademiques = $this->getTableLocator()->get('Formacademiques', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Formacademiques);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\FormacademiquesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\FormacademiquesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
