<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FormcompetencesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FormcompetencesTable Test Case
 */
class FormcompetencesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FormcompetencesTable
     */
    protected $Formcompetences;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Formcompetences',
        'app.Competences',
        'app.Detailprofilpostes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Formcompetences') ? [] : ['className' => FormcompetencesTable::class];
        $this->Formcompetences = $this->getTableLocator()->get('Formcompetences', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Formcompetences);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\FormcompetencesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\FormcompetencesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
