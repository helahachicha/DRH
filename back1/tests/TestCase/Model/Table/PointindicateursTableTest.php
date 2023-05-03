<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PointindicateursTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PointindicateursTable Test Case
 */
class PointindicateursTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PointindicateursTable
     */
    protected $Pointindicateurs;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Pointindicateurs',
        'app.Indicateursuivis',
        'app.Employes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Pointindicateurs') ? [] : ['className' => PointindicateursTable::class];
        $this->Pointindicateurs = $this->getTableLocator()->get('Pointindicateurs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Pointindicateurs);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PointindicateursTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\PointindicateursTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
