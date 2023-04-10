<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TotalpolyvalencesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TotalpolyvalencesTable Test Case
 */
class TotalpolyvalencesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TotalpolyvalencesTable
     */
    protected $Totalpolyvalences;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Totalpolyvalences',
        'app.Matricecompetences',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Totalpolyvalences') ? [] : ['className' => TotalpolyvalencesTable::class];
        $this->Totalpolyvalences = $this->getTableLocator()->get('Totalpolyvalences', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Totalpolyvalences);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TotalpolyvalencesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\TotalpolyvalencesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
