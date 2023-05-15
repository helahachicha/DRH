<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InfoficheevalsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InfoficheevalsTable Test Case
 */
class InfoficheevalsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InfoficheevalsTable
     */
    protected $Infoficheevals;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Infoficheevals',
        'app.Employes',
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
        $config = $this->getTableLocator()->exists('Infoficheevals') ? [] : ['className' => InfoficheevalsTable::class];
        $this->Infoficheevals = $this->getTableLocator()->get('Infoficheevals', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Infoficheevals);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\InfoficheevalsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\InfoficheevalsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
