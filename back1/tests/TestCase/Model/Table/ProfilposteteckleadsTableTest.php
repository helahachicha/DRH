<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProfilposteteckleadsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProfilposteteckleadsTable Test Case
 */
class ProfilposteteckleadsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProfilposteteckleadsTable
     */
    protected $Profilposteteckleads;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Profilposteteckleads',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Profilposteteckleads') ? [] : ['className' => ProfilposteteckleadsTable::class];
        $this->Profilposteteckleads = $this->getTableLocator()->get('Profilposteteckleads', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Profilposteteckleads);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProfilposteteckleadsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
