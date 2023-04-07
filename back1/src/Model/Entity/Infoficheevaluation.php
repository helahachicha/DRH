<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Infoficheevaluation Entity
 *
 * @property int $id
 * @property string $objetevaluation
 * @property string $dateevaluation
 * @property string $decisiondirection
 * @property int $employe_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Employe $employe
 */
class Infoficheevaluation extends Entity
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
        'objetevaluation' => true,
        'dateevaluation' => true,
        'decisiondirection' => true,
        'employe_id' => true,
        'created' => true,
        'modified' => true,
        'employe' => true,
    ];
}
