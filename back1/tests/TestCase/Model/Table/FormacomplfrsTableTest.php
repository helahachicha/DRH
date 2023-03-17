<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FormacomplfrsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FormacomplfrsTable Test Case
 */
class FormacomplfrsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FormacomplfrsTable
     */
    protected $Formacomplfrs;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Formacomplfrs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Formacomplfrs') ? [] : ['className' => FormacomplfrsTable::class];
        $this->Formacomplfrs = $this->getTableLocator()->get('Formacomplfrs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Formacomplfrs);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\FormacomplfrsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
