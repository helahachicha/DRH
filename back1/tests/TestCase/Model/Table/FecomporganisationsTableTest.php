<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FecomporganisationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FecomporganisationsTable Test Case
 */
class FecomporganisationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FecomporganisationsTable
     */
    protected $Fecomporganisations;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Fecomporganisations',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Fecomporganisations') ? [] : ['className' => FecomporganisationsTable::class];
        $this->Fecomporganisations = $this->getTableLocator()->get('Fecomporganisations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Fecomporganisations);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\FecomporganisationsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
