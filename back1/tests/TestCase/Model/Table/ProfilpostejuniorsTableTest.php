<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProfilpostejuniorsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProfilpostejuniorsTable Test Case
 */
class ProfilpostejuniorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProfilpostejuniorsTable
     */
    protected $Profilpostejuniors;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Profilpostejuniors',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Profilpostejuniors') ? [] : ['className' => ProfilpostejuniorsTable::class];
        $this->Profilpostejuniors = $this->getTableLocator()->get('Profilpostejuniors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Profilpostejuniors);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProfilpostejuniorsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
