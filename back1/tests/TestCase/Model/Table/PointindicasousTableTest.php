<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PointindicasousTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PointindicasousTable Test Case
 */
class PointindicasousTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PointindicasousTable
     */
    protected $Pointindicasous;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Pointindicasous',
        'app.Indicasoucompas',
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
        $config = $this->getTableLocator()->exists('Pointindicasous') ? [] : ['className' => PointindicasousTable::class];
        $this->Pointindicasous = $this->getTableLocator()->get('Pointindicasous', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Pointindicasous);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PointindicasousTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\PointindicasousTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
