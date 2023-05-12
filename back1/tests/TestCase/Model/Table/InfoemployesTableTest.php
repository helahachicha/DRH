<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InfoemployesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InfoemployesTable Test Case
 */
class InfoemployesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InfoemployesTable
     */
    protected $Infoemployes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Infoemployes',
        'app.Postes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Infoemployes') ? [] : ['className' => InfoemployesTable::class];
        $this->Infoemployes = $this->getTableLocator()->get('Infoemployes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Infoemployes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\InfoemployesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\InfoemployesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
