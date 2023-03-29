<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ComptechniquesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ComptechniquesTable Test Case
 */
class ComptechniquesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ComptechniquesTable
     */
    protected $Comptechniques;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Comptechniques',
        'app.Testtechniques',
        'app.Questions',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Comptechniques') ? [] : ['className' => ComptechniquesTable::class];
        $this->Comptechniques = $this->getTableLocator()->get('Comptechniques', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Comptechniques);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ComptechniquesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ComptechniquesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
