<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Infogenfpsychique Entity
 *
 * @property int $id
 * @property string $nomprenom
 * @property \Cake\I18n\FrozenDate $dateevaluation
 * @property string $objetevaluation
 * @property string $decisiondirection
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Infogenfpsychique extends Entity
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
        'nomprenom' => true,
        'dateevaluation' => true,
        'objetevaluation' => true,
        'decisiondirection' => true,
        'created' => true,
        'modified' => true,
    ];
}
