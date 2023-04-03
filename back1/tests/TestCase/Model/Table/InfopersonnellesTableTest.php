<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InfopersonnellesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InfopersonnellesTable Test Case
 */
class InfopersonnellesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InfopersonnellesTable
     */
    protected $Infopersonnelles;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Infopersonnelles',
        'app.Infoprofessionnelles',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Infopersonnelles') ? [] : ['className' => InfopersonnellesTable::class];
        $this->Infopersonnelles = $this->getTableLocator()->get('Infopersonnelles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Infopersonnelles);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\InfopersonnellesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\InfopersonnellesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
