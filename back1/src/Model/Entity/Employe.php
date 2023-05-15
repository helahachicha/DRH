<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Employe Entity
 *
 * @property int $id
 * @property string $objetevaluation
 * @property \Cake\I18n\FrozenTime|null $dateevaluation
 * @property string $decisiondirection
 * @property int $categorie_id
 * @property int $infoemploye_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Infoemploye $infoemploye
 * @property \App\Model\Entity\Matrix[] $matrices
 * @property \App\Model\Entity\Pointindicasous[] $pointindicasous
 * @property \App\Model\Entity\Pointindicateur[] $pointindicateurs
 * @property \App\Model\Entity\Polycompetence[] $polycompetences
 * @property \App\Model\Entity\Scorecompetence[] $scorecompetences
 * @property \App\Model\Entity\Scoresouscomp[] $scoresouscomps
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
        'objetevaluation' => true,
        'dateevaluation' => true,
        'decisiondirection' => true,
        'categorie_id' => true,
        'infoemploye_id' => true,
        'created' => true,
        'modified' => true,
        'category' => true,
        'infoemploye' => true,
        'matrices' => true,
        'pointindicasous' => true,
        'pointindicateurs' => true,
        'polycompetences' => true,
        'scorecompetences' => true,
        'scoresouscomps' => true,
    ];
}
