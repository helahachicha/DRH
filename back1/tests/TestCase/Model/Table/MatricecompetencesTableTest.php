<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MatricecompetencesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MatricecompetencesTable Test Case
 */
class MatricecompetencesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MatricecompetencesTable
     */
    protected $Matricecompetences;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Matricecompetences',
        'app.Matrices',
        'app.Polyvalences',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Matricecompetences') ? [] : ['className' => MatricecompetencesTable::class];
        $this->Matricecompetences = $this->getTableLocator()->get('Matricecompetences', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Matricecompetences);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MatricecompetencesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
