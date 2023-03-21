<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IndicateursuivisTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IndicateursuivisTable Test Case
 */
class IndicateursuivisTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\IndicateursuivisTable
     */
    protected $Indicateursuivis;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Indicateursuivis',
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
        $config = $this->getTableLocator()->exists('Indicateursuivis') ? [] : ['className' => IndicateursuivisTable::class];
        $this->Indicateursuivis = $this->getTableLocator()->get('Indicateursuivis', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Indicateursuivis);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\IndicateursuivisTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\IndicateursuivisTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
