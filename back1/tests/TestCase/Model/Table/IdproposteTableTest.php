<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IdproposteTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IdproposteTable Test Case
 */
class IdproposteTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\IdproposteTable
     */
    protected $Idproposte;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Idproposte',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Idproposte') ? [] : ['className' => IdproposteTable::class];
        $this->Idproposte = $this->getTableLocator()->get('Idproposte', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Idproposte);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\IdproposteTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
