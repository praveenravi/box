<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserRole Entity
 *
 * @property int $id
 * @property int $user_organization_id
 * @property int $role_id
 * @property int $created_by
 * @property \Cake\I18n\Time $created
 * @property int $modified_by
 * @property \Cake\I18n\Time $modified
 * @property string $status
 *
 * @property \App\Model\Entity\UserOrganization $user_organization
 * @property \App\Model\Entity\Role $role
 */
class UserRole extends Entity
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
