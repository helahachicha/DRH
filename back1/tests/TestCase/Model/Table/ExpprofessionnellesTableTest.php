<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExpprofessionnellesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExpprofessionnellesTable Test Case
 */
class ExpprofessionnellesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ExpprofessionnellesTable
     */
    protected $Expprofessionnelles;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Expprofessionnelles',
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
        $config = $this->getTableLocator()->exists('Expprofessionnelles') ? [] : ['className' => ExpprofessionnellesTable::class];
        $this->Expprofessionnelles = $this->getTableLocator()->get('Expprofessionnelles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Expprofessionnelles);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ExpprofessionnellesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ExpprofessionnellesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
