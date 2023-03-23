<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategoriedevsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategoriedevsTable Test Case
 */
class CategoriedevsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CategoriedevsTable
     */
    protected $Categoriedevs;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Categoriedevs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Categoriedevs') ? [] : ['className' => CategoriedevsTable::class];
        $this->Categoriedevs = $this->getTableLocator()->get('Categoriedevs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Categoriedevs);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CategoriedevsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
