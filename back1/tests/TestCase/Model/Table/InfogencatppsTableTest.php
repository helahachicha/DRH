<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InfogencatppsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InfogencatppsTable Test Case
 */
class InfogencatppsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InfogencatppsTable
     */
    protected $Infogencatpps;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Infogencatpps',
        'app.Categories',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Infogencatpps') ? [] : ['className' => InfogencatppsTable::class];
        $this->Infogencatpps = $this->getTableLocator()->get('Infogencatpps', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Infogencatpps);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\InfogencatppsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\InfogencatppsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
