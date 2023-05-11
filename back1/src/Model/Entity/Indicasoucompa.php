<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Indicasoucompa Entity
 *
 * @property int $id
 * @property string|null $label
 * @property int $souscompetence_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Souscompetence $souscompetence
 * @property \App\Model\Entity\Pointindicasous[] $pointindicasous
 */
class Indicasoucompa extends Entity
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
        'souscompetence_id' => true,
        'created' => true,
        'modified' => true,
        'souscompetence' => true,
        'pointindicasous' => true,
    ];
}
