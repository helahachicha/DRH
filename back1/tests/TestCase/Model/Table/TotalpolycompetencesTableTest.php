<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TotalpolycompetencesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TotalpolycompetencesTable Test Case
 */
class TotalpolycompetencesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TotalpolycompetencesTable
     */
    protected $Totalpolycompetences;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Totalpolycompetences',
        'app.Employes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Totalpolycompetences') ? [] : ['className' => TotalpolycompetencesTable::class];
        $this->Totalpolycompetences = $this->getTableLocator()->get('Totalpolycompetences', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Totalpolycompetences);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TotalpolycompetencesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\TotalpolycompetencesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
