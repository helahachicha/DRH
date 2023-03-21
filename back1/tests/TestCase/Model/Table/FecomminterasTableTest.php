<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FecomminterasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FecomminterasTable Test Case
 */
class FecomminterasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FecomminterasTable
     */
    protected $Fecomminteras;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Fecomminteras',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Fecomminteras') ? [] : ['className' => FecomminterasTable::class];
        $this->Fecomminteras = $this->getTableLocator()->get('Fecomminteras', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Fecomminteras);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\FecomminterasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
