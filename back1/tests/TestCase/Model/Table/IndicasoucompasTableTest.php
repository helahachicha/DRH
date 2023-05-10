<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IndicasoucompasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IndicasoucompasTable Test Case
 */
class IndicasoucompasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\IndicasoucompasTable
     */
    protected $Indicasoucompas;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Indicasoucompas',
        'app.Souscompetences',
        'app.Pointindicasous',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Indicasoucompas') ? [] : ['className' => IndicasoucompasTable::class];
        $this->Indicasoucompas = $this->getTableLocator()->get('Indicasoucompas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Indicasoucompas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\IndicasoucompasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\IndicasoucompasTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
