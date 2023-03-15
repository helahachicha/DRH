<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProfilpostedsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProfilpostedsTable Test Case
 */
class ProfilpostedsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProfilpostedsTable
     */
    protected $Profilposteds;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Profilposteds',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Profilposteds') ? [] : ['className' => ProfilpostedsTable::class];
        $this->Profilposteds = $this->getTableLocator()->get('Profilposteds', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Profilposteds);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProfilpostedsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
