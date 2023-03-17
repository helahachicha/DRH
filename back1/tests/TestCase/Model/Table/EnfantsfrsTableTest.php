<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EnfantsfrsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EnfantsfrsTable Test Case
 */
class EnfantsfrsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EnfantsfrsTable
     */
    protected $Enfantsfrs;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Enfantsfrs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Enfantsfrs') ? [] : ['className' => EnfantsfrsTable::class];
        $this->Enfantsfrs = $this->getTableLocator()->get('Enfantsfrs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Enfantsfrs);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EnfantsfrsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
