<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Scorecompetence Entity
 *
 * @property int $id
 * @property int $employe_id
 * @property int $competence_id
 * @property float $score
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Employe $employe
 * @property \App\Model\Entity\Competence $competence
 */
class Scorecompetence extends Entity
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
        'employe_id' => true,
        'competence_id' => true,
        'score' => true,
        'created' => true,
        'modified' => true,
        'employe' => true,
        'competence' => true,
    ];
}
