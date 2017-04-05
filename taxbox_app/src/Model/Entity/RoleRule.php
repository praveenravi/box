<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RoleRule Entity
 *
 * @property int $id
 * @property int $role_id
 * @property int $rule_id
 * @property int $created_by
 * @property \Cake\I18n\Time $created
 * @property int $modified_by
 * @property \Cake\I18n\Time $modified
 * @property string $status
 *
 * @property \App\Model\Entity\Role $role
 * @property \App\Model\Entity\Rule $rule
 */
class RoleRule extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
