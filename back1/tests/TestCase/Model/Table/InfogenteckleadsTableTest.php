<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InfogenteckleadsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InfogenteckleadsTable Test Case
 */
class InfogenteckleadsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InfogenteckleadsTable
     */
    protected $Infogenteckleads;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Infogenteckleads',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Infogenteckleads') ? [] : ['className' => InfogenteckleadsTable::class];
        $this->Infogenteckleads = $this->getTableLocator()->get('Infogenteckleads', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Infogenteckleads);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\InfogenteckleadsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
