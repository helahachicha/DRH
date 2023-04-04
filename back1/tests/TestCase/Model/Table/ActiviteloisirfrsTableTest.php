<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActiviteloisirfrsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActiviteloisirfrsTable Test Case
 */
class ActiviteloisirfrsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ActiviteloisirfrsTable
     */
    protected $Activiteloisirfrs;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Activiteloisirfrs',
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
        $config = $this->getTableLocator()->exists('Activiteloisirfrs') ? [] : ['className' => ActiviteloisirfrsTable::class];
        $this->Activiteloisirfrs = $this->getTableLocator()->get('Activiteloisirfrs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Activiteloisirfrs);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ActiviteloisirfrsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ActiviteloisirfrsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
