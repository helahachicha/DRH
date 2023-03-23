<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Categoriede Entity
 *
 * @property int $id
 * @property string $label
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Infogencatpp[] $infogencatpps
 * @property \App\Model\Entity\Interim[] $interims
 * @property \App\Model\Entity\Supervision[] $supervisions
 */
class Categoriede extends Entity
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
        'label' => true,
        'created' => true,
        'modified' => true,
        'infogencatpps' => true,
        'interims' => true,
        'supervisions' => true,
    ];
}