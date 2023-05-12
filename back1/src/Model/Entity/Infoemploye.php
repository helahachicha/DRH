<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Infoemploye Entity
 *
 * @property int $id
 * @property string $nomprenom
 * @property string $adresse
 * @property int $telprof
 * @property int $telpersonnel
 * @property int $contact
 * @property string $mailprof
 * @property string $mailpersonnel
 * @property string $servicetravail
 * @property int $poste_id
 * @property \Cake\I18n\FrozenTime $datenaissance
 * @property string $lieu
 * @property string $nationnalite
 * @property int $cin
 * @property string $delivreea
 * @property \Cake\I18n\FrozenTime $datedelivrance
 * @property string $permis
 * @property \Cake\I18n\FrozenTime $datepermis
 * @property string $logement
 * @property string $moytransport
 * @property \Cake\I18n\Time $estimatransport
 * @property string $etatsociale
 * @property string $dateetatsociale
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Poste $poste
 */
class Infoemploye extends Entity
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
        'nomprenom' => true,
        'adresse' => true,
        'telprof' => true,
        'telpersonnel' => true,
        'contact' => true,
        'mailprof' => true,
        'mailpersonnel' => true,
        'servicetravail' => true,
        'poste_id' => true,
        'datenaissance' => true,
        'lieu' => true,
        'nationnalite' => true,
        'cin' => true,
        'delivreea' => true,
        'datedelivrance' => true,
        'permis' => true,
        'datepermis' => true,
        'logement' => true,
        'moytransport' => true,
        'estimatransport' => true,
        'etatsociale' => true,
        'dateetatsociale' => true,
        'created' => true,
        'modified' => true,
        'poste' => true,
    ];
}
