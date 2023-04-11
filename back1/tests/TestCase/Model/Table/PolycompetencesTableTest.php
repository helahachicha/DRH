<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PolycompetencesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PolycompetencesTable Test Case
 */
class PolycompetencesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PolycompetencesTable
     */
    protected $Polycompetences;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Polycompetences',
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
        $config = $this->getTableLocator()->exists('Polycompetences') ? [] : ['className' => PolycompetencesTable::class];
        $this->Polycompetences = $this->getTableLocator()->get('Polycompetences', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Polycompetences);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PolycompetencesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\PolycompetencesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
