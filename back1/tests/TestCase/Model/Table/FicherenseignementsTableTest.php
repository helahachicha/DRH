<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FicherenseignementsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FicherenseignementsTable Test Case
 */
class FicherenseignementsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FicherenseignementsTable
     */
    protected $Ficherenseignements;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Ficherenseignements',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Ficherenseignements') ? [] : ['className' => FicherenseignementsTable::class];
        $this->Ficherenseignements = $this->getTableLocator()->get('Ficherenseignements', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Ficherenseignements);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\FicherenseignementsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
