<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProfilposteconfirmesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProfilposteconfirmesTable Test Case
 */
class ProfilposteconfirmesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProfilposteconfirmesTable
     */
    protected $Profilposteconfirmes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Profilposteconfirmes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Profilposteconfirmes') ? [] : ['className' => ProfilposteconfirmesTable::class];
        $this->Profilposteconfirmes = $this->getTableLocator()->get('Profilposteconfirmes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Profilposteconfirmes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProfilposteconfirmesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
