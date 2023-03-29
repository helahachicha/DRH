<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Souscompetence Entity
 *
 * @property int $id
 * @property string $label4
 * @property int $competence_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Competence $competence
 * @property \App\Model\Entity\Indicateursuivi[] $indicateursuivis
 */
class Souscompetence extends Entity
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
        'label4' => true,
        'competence_id' => true,
        'created' => true,
        'modified' => true,
        'competence' => true,
        'indicateursuivis' => true,
    ];
}
