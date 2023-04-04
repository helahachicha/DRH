<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Infopersonnelle Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $daten
 * @property string $lieu
 * @property string $nationalite
 * @property int $ncin
 * @property string $delivreecin
 * @property \Cake\I18n\FrozenDate $datecin
 * @property string $permis
 * @property \Cake\I18n\FrozenDate $datepermis
 * @property string $logement
 * @property string $moyentransport
 * @property int $heure
 * @property int $minute
 * @property string $situationfamiliale
 * @property \Cake\I18n\FrozenDate $datemariedivorce
 * @property int $infoprofessionnelle_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Infoprofessionnelle $infoprofessionnelle
 */
class Infopersonnelle extends Entity
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
        'daten' => true,
        'lieu' => true,
        'nationalite' => true,
        'ncin' => true,
        'delivreecin' => true,
        'datecin' => true,
        'permis' => true,
        'datepermis' => true,
        'logement' => true,
        'moyentransport' => true,
        'heure' => true,
        'minute' => true,
        'situationfamiliale' => true,
        'datemariedivorce' => true,
        'infoprofessionnelle_id' => true,
        'created' => true,
        'modified' => true,
        'infoprofessionnelle' => true,
    ];
}
