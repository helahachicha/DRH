<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProfilposteseniorsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProfilposteseniorsTable Test Case
 */
class ProfilposteseniorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProfilposteseniorsTable
     */
    protected $Profilposteseniors;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Profilposteseniors',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Profilposteseniors') ? [] : ['className' => ProfilposteseniorsTable::class];
        $this->Profilposteseniors = $this->getTableLocator()->get('Profilposteseniors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Profilposteseniors);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProfilposteseniorsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
