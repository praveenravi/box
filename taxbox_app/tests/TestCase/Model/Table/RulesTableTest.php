<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RulesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RulesTable Test Case
 */
class RulesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RulesTable
     */
    public $Rules;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.rules',
        'app.role_rules',
        'app.roles',
        'app.user_roles'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Rules') ? [] : ['className' => 'App\Model\Table\RulesTable'];
        $this->Rules = TableRegistry::get('Rules', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Rules);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
