<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InfogenjuniorsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InfogenjuniorsTable Test Case
 */
class InfogenjuniorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InfogenjuniorsTable
     */
    protected $Infogenjuniors;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Infogenjuniors',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Infogenjuniors') ? [] : ['className' => InfogenjuniorsTable::class];
        $this->Infogenjuniors = $this->getTableLocator()->get('Infogenjuniors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Infogenjuniors);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\InfogenjuniorsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
