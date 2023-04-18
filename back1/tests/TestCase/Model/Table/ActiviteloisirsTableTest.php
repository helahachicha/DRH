<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActiviteloisirsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActiviteloisirsTable Test Case
 */
class ActiviteloisirsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ActiviteloisirsTable
     */
    protected $Activiteloisirs;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Activiteloisirs',
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
        $config = $this->getTableLocator()->exists('Activiteloisirs') ? [] : ['className' => ActiviteloisirsTable::class];
        $this->Activiteloisirs = $this->getTableLocator()->get('Activiteloisirs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Activiteloisirs);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ActiviteloisirsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ActiviteloisirsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
