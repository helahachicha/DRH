<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DetailprofilpostesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DetailprofilpostesTable Test Case
 */
class DetailprofilpostesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DetailprofilpostesTable
     */
    protected $Detailprofilpostes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Detailprofilpostes',
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
        $config = $this->getTableLocator()->exists('Detailprofilpostes') ? [] : ['className' => DetailprofilpostesTable::class];
        $this->Detailprofilpostes = $this->getTableLocator()->get('Detailprofilpostes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Detailprofilpostes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DetailprofilpostesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\DetailprofilpostesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
