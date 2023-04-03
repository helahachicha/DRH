<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FormacomplementairesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FormacomplementairesTable Test Case
 */
class FormacomplementairesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FormacomplementairesTable
     */
    protected $Formacomplementaires;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Formacomplementaires',
        'app.Infoprofessionnelles',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Formacomplementaires') ? [] : ['className' => FormacomplementairesTable::class];
        $this->Formacomplementaires = $this->getTableLocator()->get('Formacomplementaires', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Formacomplementaires);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\FormacomplementairesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\FormacomplementairesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
