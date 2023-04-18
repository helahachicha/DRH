<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Enfant Entity
 *
 * @property int $id
 * @property int $ordre
 * @property string $prenom
 * @property \Cake\I18n\FrozenDate $datenaissancee
 * @property string $niveauetude
 * @property string $centreinteret
 * @property string $etatsante
 * @property int $informationprofessionnelle_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Informationprofessionnelle $informationprofessionnelle
 */
class Enfant extends Entity
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
        'ordre' => true,
        'prenom' => true,
        'datenaissancee' => true,
        'niveauetude' => true,
        'centreinteret' => true,
        'etatsante' => true,
        'informationprofessionnelle_id' => true,
        'created' => true,
        'modified' => true,
        'informationprofessionnelle' => true,
    ];
}
