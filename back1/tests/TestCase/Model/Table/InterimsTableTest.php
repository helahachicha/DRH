<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InterimsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InterimsTable Test Case
 */
class InterimsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InterimsTable
     */
    protected $Interims;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Interims',
        'app.Categoriedevs',
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
        $config = $this->getTableLocator()->exists('Interims') ? [] : ['className' => InterimsTable::class];
        $this->Interims = $this->getTableLocator()->get('Interims', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Interims);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\InterimsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\InterimsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
