<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InfogenfpsychiquesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InfogenfpsychiquesTable Test Case
 */
class InfogenfpsychiquesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InfogenfpsychiquesTable
     */
    protected $Infogenfpsychiques;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Infogenfpsychiques',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Infogenfpsychiques') ? [] : ['className' => InfogenfpsychiquesTable::class];
        $this->Infogenfpsychiques = $this->getTableLocator()->get('Infogenfpsychiques', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Infogenfpsychiques);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\InfogenfpsychiquesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
