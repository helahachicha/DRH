<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CoutformaexternesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CoutformaexternesTable Test Case
 */
class CoutformaexternesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CoutformaexternesTable
     */
    protected $Coutformaexternes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Coutformaexternes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Coutformaexternes') ? [] : ['className' => CoutformaexternesTable::class];
        $this->Coutformaexternes = $this->getTableLocator()->get('Coutformaexternes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Coutformaexternes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CoutformaexternesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
