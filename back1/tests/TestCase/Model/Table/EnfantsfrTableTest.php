<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EnfantsfrTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EnfantsfrTable Test Case
 */
class EnfantsfrTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EnfantsfrTable
     */
    protected $Enfantsfr;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Enfantsfr',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Enfantsfr') ? [] : ['className' => EnfantsfrTable::class];
        $this->Enfantsfr = $this->getTableLocator()->get('Enfantsfr', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Enfantsfr);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EnfantsfrTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
