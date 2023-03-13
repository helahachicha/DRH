<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FormainternesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FormainternesTable Test Case
 */
class FormainternesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FormainternesTable
     */
    protected $Formainternes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Formainternes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Formainternes') ? [] : ['className' => FormainternesTable::class];
        $this->Formainternes = $this->getTableLocator()->get('Formainternes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Formainternes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\FormainternesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
