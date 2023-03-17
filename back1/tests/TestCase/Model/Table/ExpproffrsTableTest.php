<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExpproffrsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExpproffrsTable Test Case
 */
class ExpproffrsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ExpproffrsTable
     */
    protected $Expproffrs;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Expproffrs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Expproffrs') ? [] : ['className' => ExpproffrsTable::class];
        $this->Expproffrs = $this->getTableLocator()->get('Expproffrs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Expproffrs);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ExpproffrsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
