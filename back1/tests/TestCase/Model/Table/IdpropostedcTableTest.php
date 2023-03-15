<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IdpropostedcTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IdpropostedcTable Test Case
 */
class IdpropostedcTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\IdpropostedcTable
     */
    protected $Idpropostedc;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Idpropostedc',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Idpropostedc') ? [] : ['className' => IdpropostedcTable::class];
        $this->Idpropostedc = $this->getTableLocator()->get('Idpropostedc', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Idpropostedc);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\IdpropostedcTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
