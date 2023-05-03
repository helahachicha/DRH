<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MoyennepointsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MoyennepointsTable Test Case
 */
class MoyennepointsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MoyennepointsTable
     */
    protected $Moyennepoints;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Moyennepoints',
        'app.Employes',
        'app.Pointindicateurs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Moyennepoints') ? [] : ['className' => MoyennepointsTable::class];
        $this->Moyennepoints = $this->getTableLocator()->get('Moyennepoints', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Moyennepoints);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MoyennepointsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\MoyennepointsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
