<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategorieppsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategorieppsTable Test Case
 */
class CategorieppsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CategorieppsTable
     */
    protected $Categoriepps;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Categoriepps',
        'app.Profilpostes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Categoriepps') ? [] : ['className' => CategorieppsTable::class];
        $this->Categoriepps = $this->getTableLocator()->get('Categoriepps', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Categoriepps);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CategorieppsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CategorieppsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
