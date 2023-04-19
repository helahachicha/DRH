<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InformationpersonnellesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InformationpersonnellesTable Test Case
 */
class InformationpersonnellesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InformationpersonnellesTable
     */
    protected $Informationpersonnelles;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Informationpersonnelles',
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
        $config = $this->getTableLocator()->exists('Informationpersonnelles') ? [] : ['className' => InformationpersonnellesTable::class];
        $this->Informationpersonnelles = $this->getTableLocator()->get('Informationpersonnelles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Informationpersonnelles);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\InformationpersonnellesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\InformationpersonnellesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
