<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompetencesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompetencesTable Test Case
 */
class CompetencesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CompetencesTable
     */
    protected $Competences;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Competences',
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
        $config = $this->getTableLocator()->exists('Competences') ? [] : ['className' => CompetencesTable::class];
        $this->Competences = $this->getTableLocator()->get('Competences', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Competences);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CompetencesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
