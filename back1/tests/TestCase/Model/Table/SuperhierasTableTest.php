<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SuperhierasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SuperhierasTable Test Case
 */
class SuperhierasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SuperhierasTable
     */
    protected $Superhieras;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Superhieras',
        'app.Infogencatpps',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Superhieras') ? [] : ['className' => SuperhierasTable::class];
        $this->Superhieras = $this->getTableLocator()->get('Superhieras', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Superhieras);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SuperhierasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
