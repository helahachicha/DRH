<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProfilpostedcTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProfilpostedcTable Test Case
 */
class ProfilpostedcTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProfilpostedcTable
     */
    protected $Profilpostedc;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Profilpostedc',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Profilpostedc') ? [] : ['className' => ProfilpostedcTable::class];
        $this->Profilpostedc = $this->getTableLocator()->get('Profilpostedc', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Profilpostedc);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProfilpostedcTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
