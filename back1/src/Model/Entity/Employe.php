<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Employe Entity
 *
 * @property int $id
 * @property string $nomprenom
 * @property int $categorie_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Infoficheevaluation[] $infoficheevaluations
 * @property \App\Model\Entity\Matrix[] $matrices
 * @property \App\Model\Entity\Polycompetence[] $polycompetences
 */
class Employe extends Entity
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
        'categorie_id' => true,
        'created' => true,
        'modified' => true,
        'category' => true,
        'infoficheevaluations' => true,
        'matrices' => true,
        'polycompetences' => true,
    ];
}
