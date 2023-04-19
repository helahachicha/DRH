<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FormaacademiquesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FormaacademiquesTable Test Case
 */
class FormaacademiquesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FormaacademiquesTable
     */
    protected $Formaacademiques;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Formaacademiques',
        'app.Informationprofessionnelles',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Formaacademiques') ? [] : ['className' => FormaacademiquesTable::class];
        $this->Formaacademiques = $this->getTableLocator()->get('Formaacademiques', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Formaacademiques);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\FormaacademiquesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\FormaacademiquesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
