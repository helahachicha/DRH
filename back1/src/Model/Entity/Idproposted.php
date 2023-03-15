<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Idproposted Entity
 *
 * @property int $id
 * @property int $majnds
 * @property \Cake\I18n\FrozenDate $duds
 * @property string $Fonctionds
 * @property string $Categorieds
 * @property string $Suphierds
 * @property string $Superds
 * @property string $Interimds
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Idproposted extends Entity
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
        'majnds' => true,
        'duds' => true,
        'Fonctionds' => true,
        'Categorieds' => true,
        'Suphierds' => true,
        'Superds' => true,
        'Interimds' => true,
        'created' => true,
        'modified' => true,
    ];
}
