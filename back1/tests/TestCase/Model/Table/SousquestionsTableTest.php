<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SousquestionsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SousquestionsTable Test Case
 */
class SousquestionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SousquestionsTable
     */
    protected $Sousquestions;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Sousquestions',
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
        $config = $this->getTableLocator()->exists('Sousquestions') ? [] : ['className' => SousquestionsTable::class];
        $this->Sousquestions = $this->getTableLocator()->get('Sousquestions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Sousquestions);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SousquestionsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\SousquestionsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
