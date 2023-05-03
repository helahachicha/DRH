<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Indicateursuivi Entity
 *
 * @property int $id
 * @property string|null $label
 * @property int $detailprofilposte_id
 * @property int $competence_id
 * @property int $niveauvise_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Detailprofilposte $detailprofilposte
 * @property \App\Model\Entity\Competence $competence
 * @property \App\Model\Entity\Niveauvise $niveauvise
 * @property \App\Model\Entity\Noteevaluation[] $noteevaluations
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
        'detailprofilposte_id' => true,
        'competence_id' => true,
        'niveauvise_id' => true,
        'created' => true,
        'modified' => true,
        'detailprofilposte' => true,
        'competence' => true,
        'niveauvise' => true,
        'noteevaluations' => true,
        'pointindicateurs' => true,
    ];
}
