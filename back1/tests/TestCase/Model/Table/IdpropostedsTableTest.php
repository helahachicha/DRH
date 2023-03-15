<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IdpropostedsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IdpropostedsTable Test Case
 */
class IdpropostedsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\IdpropostedsTable
     */
    protected $Idproposteds;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Idproposteds',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Idproposteds') ? [] : ['className' => IdpropostedsTable::class];
        $this->Idproposteds = $this->getTableLocator()->get('Idproposteds', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Idproposteds);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\IdpropostedsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
