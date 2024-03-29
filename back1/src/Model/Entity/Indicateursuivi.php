<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Indicateursuivi Entity
 *
 * @property int $id
 * @property string|null $label
 * @property int $formcompetence_id
 * @property int $niveauvise_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Formcompetence $formcompetence
 * @property \App\Model\Entity\Niveauvise $niveauvise
 * @property \App\Model\Entity\Pointindicateur[] $pointindicateurs
 */
class Indicateursuivi extends Entity
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
        'formcompetence_id' => true,
        'niveauvise_id' => true,
        'created' => true,
        'modified' => true,
        'formcompetence' => true,
        'niveauvise' => true,
        'pointindicateurs' => true,
    ];
}
