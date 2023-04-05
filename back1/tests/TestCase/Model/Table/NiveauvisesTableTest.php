<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NiveauvisesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NiveauvisesTable Test Case
 */
class NiveauvisesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NiveauvisesTable
     */
    protected $Niveauvises;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Niveauvises',
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
        $config = $this->getTableLocator()->exists('Niveauvises') ? [] : ['className' => NiveauvisesTable::class];
        $this->Niveauvises = $this->getTableLocator()->get('Niveauvises', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Niveauvises);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\NiveauvisesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\NiveauvisesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
