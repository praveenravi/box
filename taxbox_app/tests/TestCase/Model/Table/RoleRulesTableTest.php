<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RoleRulesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RoleRulesTable Test Case
 */
class RoleRulesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RoleRulesTable
     */
    public $RoleRules;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.role_rules',
        'app.roles',
        'app.rules'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('RoleRules') ? [] : ['className' => 'App\Model\Table\RoleRulesTable'];
        $this->RoleRules = TableRegistry::get('RoleRules', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RoleRules);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
