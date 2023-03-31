<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Infoficheevaluation Entity
 *
 * @property int $id
 * @property string $nomprenom
 * @property string $objetevaluation
 * @property \Cake\I18n\FrozenDate $dateevaluation
 * @property string $decisiondirection
 * @property int $categorie_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Category $category
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
        'nomprenom' => true,
        'objetevaluation' => true,
        'dateevaluation' => true,
        'decisiondirection' => true,
        'categorie_id' => true,
        'created' => true,
        'modified' => true,
        'category' => true,
    ];
}
