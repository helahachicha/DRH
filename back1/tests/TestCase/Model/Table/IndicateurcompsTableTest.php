<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IndicateurcompsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IndicateurcompsTable Test Case
 */
class IndicateurcompsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\IndicateurcompsTable
     */
    protected $Indicateurcomps;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Indicateurcomps',
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
        $config = $this->getTableLocator()->exists('Indicateurcomps') ? [] : ['className' => IndicateurcompsTable::class];
        $this->Indicateurcomps = $this->getTableLocator()->get('Indicateurcomps', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Indicateurcomps);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\IndicateurcompsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\IndicateurcompsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
