<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategoriedesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategoriedesTable Test Case
 */
class CategoriedesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CategoriedesTable
     */
    protected $Categoriedes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Categoriedes',
        'app.Infogencatpps',
        'app.Interims',
        'app.Supervisions',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Categoriedes') ? [] : ['className' => CategoriedesTable::class];
        $this->Categoriedes = $this->getTableLocator()->get('Categoriedes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Categoriedes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CategoriedesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
