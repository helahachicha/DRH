<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Formacademique Entity
 *
 * @property int $id
 * @property string $niveau
 * @property string $specialite
 * @property string $annee
 * @property string $etablissement
 * @property int $infoprofessionnelle_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Infoprofessionnelle $infoprofessionnelle
 */
class Formacademique extends Entity
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
        'niveau' => true,
        'specialite' => true,
        'annee' => true,
        'etablissement' => true,
        'infoprofessionnelle_id' => true,
        'created' => true,
        'modified' => true,
        'infoprofessionnelle' => true,
    ];
}
