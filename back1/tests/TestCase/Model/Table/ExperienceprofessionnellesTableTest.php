<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExperienceprofessionnellesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExperienceprofessionnellesTable Test Case
 */
class ExperienceprofessionnellesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ExperienceprofessionnellesTable
     */
    protected $Experienceprofessionnelles;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Experienceprofessionnelles',
        'app.Informationprofessionnelles',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Experienceprofessionnelles') ? [] : ['className' => ExperienceprofessionnellesTable::class];
        $this->Experienceprofessionnelles = $this->getTableLocator()->get('Experienceprofessionnelles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Experienceprofessionnelles);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ExperienceprofessionnellesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ExperienceprofessionnellesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
