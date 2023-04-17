<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Informationpersonnelle Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $datenaissance
 * @property string $lieunaissance
 * @property string $nationalite
 * @property int $ncin
 * @property string $lieucin
 * @property \Cake\I18n\FrozenDate $datecin
 * @property string $permis
 * @property \Cake\I18n\FrozenDate $datepermis
 * @property string $logement
 * @property string $moyentransport
 * @property int $minutetrajet
 * @property int $heuretrajet
 * @property string $situationfamiliale
 * @property \Cake\I18n\FrozenDate $datesituation
 * @property string $critereenfance
 * @property string $beaumoment
 * @property string $mauvaismoment
 * @property int $informationprofessionnelle_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Informationprofessionnelle $informationprofessionnelle
 */
class Informationpersonnelle extends Entity
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
        'datenaissance' => true,
        'lieunaissance' => true,
        'nationalite' => true,
        'ncin' => true,
        'lieucin' => true,
        'datecin' => true,
        'permis' => true,
        'datepermis' => true,
        'logement' => true,
        'moyentransport' => true,
        'minutetrajet' => true,
        'heuretrajet' => true,
        'situationfamiliale' => true,
        'datesituation' => true,
        'critereenfance' => true,
        'beaumoment' => true,
        'mauvaismoment' => true,
        'informationprofessionnelle_id' => true,
        'created' => true,
        'modified' => true,
        'informationprofessionnelle' => true,
    ];
}
