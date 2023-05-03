<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pointindicasous Entity
 *
 * @property int $id
 * @property int $label
 * @property int $indicasoucompa_id
 * @property int $souscompetence_id
 * @property int $competence_id
 * @property int $employe_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Indicasoucompa $indicasoucompa
 * @property \App\Model\Entity\Souscompetence $souscompetence
 * @property \App\Model\Entity\Competence $competence
 * @property \App\Model\Entity\Employe $employe
 */
class Pointindicasous extends Entity
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
        'indicasoucompa_id' => true,
        'souscompetence_id' => true,
        'competence_id' => true,
        'employe_id' => true,
        'created' => true,
        'modified' => true,
        'indicasoucompa' => true,
        'souscompetence' => true,
        'competence' => true,
        'employe' => true,
    ];
}
