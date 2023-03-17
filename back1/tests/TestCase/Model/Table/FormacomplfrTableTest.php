<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FormacomplfrTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FormacomplfrTable Test Case
 */
class FormacomplfrTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FormacomplfrTable
     */
    protected $Formacomplfr;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Formacomplfr',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Formacomplfr') ? [] : ['className' => FormacomplfrTable::class];
        $this->Formacomplfr = $this->getTableLocator()->get('Formacomplfr', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Formacomplfr);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\FormacomplfrTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
