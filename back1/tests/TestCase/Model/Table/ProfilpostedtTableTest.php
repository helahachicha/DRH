<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProfilpostedtTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProfilpostedtTable Test Case
 */
class ProfilpostedtTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProfilpostedtTable
     */
    protected $Profilpostedt;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Profilpostedt',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Profilpostedt') ? [] : ['className' => ProfilpostedtTable::class];
        $this->Profilpostedt = $this->getTableLocator()->get('Profilpostedt', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Profilpostedt);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProfilpostedtTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
