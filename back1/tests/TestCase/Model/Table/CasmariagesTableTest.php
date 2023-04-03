<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CasmariagesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CasmariagesTable Test Case
 */
class CasmariagesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CasmariagesTable
     */
    protected $Casmariages;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Casmariages',
        'app.Infoprofessionnelles',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Casmariages') ? [] : ['className' => CasmariagesTable::class];
        $this->Casmariages = $this->getTableLocator()->get('Casmariages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Casmariages);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CasmariagesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CasmariagesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
