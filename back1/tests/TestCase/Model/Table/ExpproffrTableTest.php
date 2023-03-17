<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExpproffrTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExpproffrTable Test Case
 */
class ExpproffrTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ExpproffrTable
     */
    protected $Expproffr;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Expproffr',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Expproffr') ? [] : ['className' => ExpproffrTable::class];
        $this->Expproffr = $this->getTableLocator()->get('Expproffr', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Expproffr);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ExpproffrTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
