<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Infoprofessionnelle Entity
 *
 * @property int $id
 * @property string $nomprenom
 * @property string $adresse
 * @property int $telprofessionnel
 * @property int $telpersonnel
 * @property int $contact
 * @property string $mailprofessionnel
 * @property string $mailpersonnel
 * @property string $service
 * @property string $poste
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Activiteloisirfr[] $activiteloisirfrs
 * @property \App\Model\Entity\Casmariage[] $casmariages
 * @property \App\Model\Entity\Enfant[] $enfants
 * @property \App\Model\Entity\Expprofessionnelle[] $expprofessionnelles
 * @property \App\Model\Entity\Formacademique[] $formacademiques
 * @property \App\Model\Entity\Formacomplementaire[] $formacomplementaires
 * @property \App\Model\Entity\Infopersonnelle[] $infopersonnelles
 * @property \App\Model\Entity\Langue[] $langues
 * @property \App\Model\Entity\Point[] $points
 */
class Infoprofessionnelle extends Entity
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
        'telprofessionnel' => true,
        'telpersonnel' => true,
        'contact' => true,
        'mailprofessionnel' => true,
        'mailpersonnel' => true,
        'service' => true,
        'poste' => true,
        'created' => true,
        'modified' => true,
        'activiteloisirfrs' => true,
        'casmariages' => true,
        'enfants' => true,
        'expprofessionnelles' => true,
        'formacademiques' => true,
        'formacomplementaires' => true,
        'infopersonnelles' => true,
        'langues' => true,
        'points' => true,
    ];
}
