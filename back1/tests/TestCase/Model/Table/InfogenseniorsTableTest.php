<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InfogenseniorsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InfogenseniorsTable Test Case
 */
class InfogenseniorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InfogenseniorsTable
     */
    protected $Infogenseniors;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Infogenseniors',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Infogenseniors') ? [] : ['className' => InfogenseniorsTable::class];
        $this->Infogenseniors = $this->getTableLocator()->get('Infogenseniors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Infogenseniors);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\InfogenseniorsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
