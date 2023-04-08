<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EchelleevaluationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EchelleevaluationsTable Test Case
 */
class EchelleevaluationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EchelleevaluationsTable
     */
    protected $Echelleevaluations;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Echelleevaluations',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Echelleevaluations') ? [] : ['className' => EchelleevaluationsTable::class];
        $this->Echelleevaluations = $this->getTableLocator()->get('Echelleevaluations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Echelleevaluations);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EchelleevaluationsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
