<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PolyvalencesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PolyvalencesTable Test Case
 */
class PolyvalencesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PolyvalencesTable
     */
    protected $Polyvalences;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Polyvalences',
        'app.Matricecompetences',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Polyvalences') ? [] : ['className' => PolyvalencesTable::class];
        $this->Polyvalences = $this->getTableLocator()->get('Polyvalences', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Polyvalences);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PolyvalencesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\PolyvalencesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
