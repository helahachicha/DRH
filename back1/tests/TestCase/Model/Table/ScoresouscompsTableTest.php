<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ScoresouscompsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ScoresouscompsTable Test Case
 */
class ScoresouscompsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ScoresouscompsTable
     */
    protected $Scoresouscomps;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Scoresouscomps',
        'app.Employes',
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
        $config = $this->getTableLocator()->exists('Scoresouscomps') ? [] : ['className' => ScoresouscompsTable::class];
        $this->Scoresouscomps = $this->getTableLocator()->get('Scoresouscomps', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Scoresouscomps);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ScoresouscompsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ScoresouscompsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
