<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NoteindicateursTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NoteindicateursTable Test Case
 */
class NoteindicateursTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NoteindicateursTable
     */
    protected $Noteindicateurs;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Noteindicateurs',
        'app.Souscompetences',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Noteindicateurs') ? [] : ['className' => NoteindicateursTable::class];
        $this->Noteindicateurs = $this->getTableLocator()->get('Noteindicateurs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Noteindicateurs);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\NoteindicateursTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\NoteindicateursTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
