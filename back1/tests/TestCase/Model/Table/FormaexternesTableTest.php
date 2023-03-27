<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FormaexternesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FormaexternesTable Test Case
 */
class FormaexternesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FormaexternesTable
     */
    protected $Formaexternes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Formaexternes',
        'app.Themeformations',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Formaexternes') ? [] : ['className' => FormaexternesTable::class];
        $this->Formaexternes = $this->getTableLocator()->get('Formaexternes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Formaexternes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\FormaexternesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\FormaexternesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
