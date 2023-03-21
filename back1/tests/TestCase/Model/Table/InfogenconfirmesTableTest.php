<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InfogenconfirmesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InfogenconfirmesTable Test Case
 */
class InfogenconfirmesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InfogenconfirmesTable
     */
    protected $Infogenconfirmes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Infogenconfirmes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Infogenconfirmes') ? [] : ['className' => InfogenconfirmesTable::class];
        $this->Infogenconfirmes = $this->getTableLocator()->get('Infogenconfirmes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Infogenconfirmes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\InfogenconfirmesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
