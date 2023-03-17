<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FicherenseignementTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FicherenseignementTable Test Case
 */
class FicherenseignementTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FicherenseignementTable
     */
    protected $Ficherenseignement;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Ficherenseignement',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Ficherenseignement') ? [] : ['className' => FicherenseignementTable::class];
        $this->Ficherenseignement = $this->getTableLocator()->get('Ficherenseignement', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Ficherenseignement);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\FicherenseignementTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
