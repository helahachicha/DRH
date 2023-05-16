<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SouscompetencesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SouscompetencesTable Test Case
 */
class SouscompetencesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SouscompetencesTable
     */
    protected $Souscompetences;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Souscompetences',
        'app.Formcompetences',
        'app.Indicasoucompas',
        'app.Scoresouscomps',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Souscompetences') ? [] : ['className' => SouscompetencesTable::class];
        $this->Souscompetences = $this->getTableLocator()->get('Souscompetences', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Souscompetences);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SouscompetencesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\SouscompetencesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
