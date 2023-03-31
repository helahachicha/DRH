<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InfoficheevaluationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InfoficheevaluationsTable Test Case
 */
class InfoficheevaluationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InfoficheevaluationsTable
     */
    protected $Infoficheevaluations;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Infoficheevaluations',
        'app.Categories',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Infoficheevaluations') ? [] : ['className' => InfoficheevaluationsTable::class];
        $this->Infoficheevaluations = $this->getTableLocator()->get('Infoficheevaluations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Infoficheevaluations);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\InfoficheevaluationsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\InfoficheevaluationsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
