<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InfogenconfimesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InfogenconfimesTable Test Case
 */
class InfogenconfimesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InfogenconfimesTable
     */
    protected $Infogenconfimes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Infogenconfimes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Infogenconfimes') ? [] : ['className' => InfogenconfimesTable::class];
        $this->Infogenconfimes = $this->getTableLocator()->get('Infogenconfimes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Infogenconfimes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\InfogenconfimesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
