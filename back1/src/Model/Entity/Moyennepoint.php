<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Moyennepoint Entity
 *
 * @property int $id
 * @property float $moyenne
 * @property int $employe_id
 * @property int $pointindicateur_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Employe $employe
 * @property \App\Model\Entity\Pointindicateur $pointindicateur
 */
class Moyennepoint extends Entity
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
        'moyenne' => true,
        'employe_id' => true,
        'pointindicateur_id' => true,
        'created' => true,
        'modified' => true,
        'employe' => true,
        'pointindicateur' => true,
    ];
}
