<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ScorecompetencesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ScorecompetencesTable Test Case
 */
class ScorecompetencesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ScorecompetencesTable
     */
    protected $Scorecompetences;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Scorecompetences',
        'app.Employes',
        'app.Competences',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Scorecompetences') ? [] : ['className' => ScorecompetencesTable::class];
        $this->Scorecompetences = $this->getTableLocator()->get('Scorecompetences', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Scorecompetences);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ScorecompetencesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ScorecompetencesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
