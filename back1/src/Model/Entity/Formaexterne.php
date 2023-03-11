<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Formaexterne Entity
 *
 * @property int $id
 * @property string $typecomp
 * @property string $themforma
 * @property string $participant
 * @property int $nbparticipant
 * @property string $raisonforma
 * @property string $organismeforma
 * @property string $formalite
 * @property string $formateur
 * @property string $raisonchoix
 * @property string $dureeforma
 * @property int $nbjour
 * @property int $nbhjour
 * @property \Cake\I18n\FrozenTime $date
 * @property string $horaireforma
 * @property string $pause
 * @property string $lieuforma
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Formaexterne extends Entity
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
        'typecomp' => true,
        'themforma' => true,
        'participant' => true,
        'nbparticipant' => true,
        'raisonforma' => true,
        'organismeforma' => true,
        'formalite' => true,
        'formateur' => true,
        'raisonchoix' => true,
        'dureeforma' => true,
        'nbjour' => true,
        'nbhjour' => true,
        'date' => true,
        'horaireforma' => true,
        'pause' => true,
        'lieuforma' => true,
        'created' => true,
        'modified' => true,
    ];
}
