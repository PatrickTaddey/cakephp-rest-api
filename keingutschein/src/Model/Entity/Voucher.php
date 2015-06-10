<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Voucher Entity.
 */
class Voucher extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'password' => true,
        'active' => true,
        'name' => true,
        'description' => true,
        'css_icon_class' => true,
        'date_valid_until' => true,
        'date_to_redeem' => true,
    ];
}
