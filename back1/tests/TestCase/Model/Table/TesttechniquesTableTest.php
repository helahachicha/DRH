<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TesttechniquesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TesttechniquesTable Test Case
 */
class TesttechniquesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TesttechniquesTable
     */
    protected $Testtechniques;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Testtechniques',
        'app.Departements',
        'app.Postes',
        'app.Comptechniques',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Testtechniques') ? [] : ['className' => TesttechniquesTable::class];
        $this->Testtechniques = $this->getTableLocator()->get('Testtechniques', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Testtechniques);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TesttechniquesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\TesttechniquesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
