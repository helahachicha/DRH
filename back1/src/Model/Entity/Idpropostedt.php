<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Idpropostedt Entity
 *
 * @property int $id
 * @property string $refdt
 * @property int $majndt
 * @property \Cake\I18n\FrozenDate $dudt
 * @property string $Fonctiondt
 * @property string $Categoriedt
 * @property string $Suphierdt
 * @property string $Superdt
 * @property string $Interimdt
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Idpropostedt extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'refdt' => true,
        'majndt' => true,
        'dudt' => true,
        'Fonctiondt' => true,
        'Categoriedt' => true,
        'Suphierdt' => true,
        'Superdt' => true,
        'Interimdt' => true,
        'created' => true,
        'modified' => true,
    ];
}
