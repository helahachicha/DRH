<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProfilposteTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProfilposteTable Test Case
 */
class ProfilposteTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProfilposteTable
     */
    protected $Profilposte;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Profilposte',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Profilposte') ? [] : ['className' => ProfilposteTable::class];
        $this->Profilposte = $this->getTableLocator()->get('Profilposte', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Profilposte);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProfilposteTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
