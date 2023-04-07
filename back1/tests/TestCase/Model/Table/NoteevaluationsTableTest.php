<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NoteevaluationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NoteevaluationsTable Test Case
 */
class NoteevaluationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NoteevaluationsTable
     */
    protected $Noteevaluations;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Noteevaluations',
        'app.Points',
        'app.Indicateursuivis',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Noteevaluations') ? [] : ['className' => NoteevaluationsTable::class];
        $this->Noteevaluations = $this->getTableLocator()->get('Noteevaluations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Noteevaluations);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\NoteevaluationsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\NoteevaluationsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
