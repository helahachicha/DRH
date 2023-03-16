<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IdpropostedtTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IdpropostedtTable Test Case
 */
class IdpropostedtTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\IdpropostedtTable
     */
    protected $Idpropostedt;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Idpropostedt',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Idpropostedt') ? [] : ['className' => IdpropostedtTable::class];
        $this->Idpropostedt = $this->getTableLocator()->get('Idpropostedt', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Idpropostedt);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\IdpropostedtTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
