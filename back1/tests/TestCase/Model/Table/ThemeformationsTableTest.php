<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ThemeformationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ThemeformationsTable Test Case
 */
class ThemeformationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ThemeformationsTable
     */
    protected $Themeformations;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Themeformations',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Themeformations') ? [] : ['className' => ThemeformationsTable::class];
        $this->Themeformations = $this->getTableLocator()->get('Themeformations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Themeformations);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ThemeformationsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
