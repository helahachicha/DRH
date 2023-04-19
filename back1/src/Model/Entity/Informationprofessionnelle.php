<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Informationprofessionnelle Entity
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
 * @property \App\Model\Entity\Activiteloisir[] $activiteloisirs
 * @property \App\Model\Entity\Conjoint[] $conjoints
 * @property \App\Model\Entity\Enfant[] $enfants
 * @property \App\Model\Entity\Experienceprofessionnelle[] $experienceprofessionnelles
 * @property \App\Model\Entity\Formaacademique[] $formaacademiques
 * @property \App\Model\Entity\Formacomplementaire[] $formacomplementaires
 * @property \App\Model\Entity\Informationpersonnelle[] $informationpersonnelles
 * @property \App\Model\Entity\Langue[] $langues
 * @property \App\Model\Entity\Performance[] $performances
 */
class Informationprofessionnelle extends Entity
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
        'activiteloisirs' => true,
        'conjoints' => true,
        'enfants' => true,
        'experienceprofessionnelles' => true,
        'formaacademiques' => true,
        'formacomplementaires' => true,
        'informationpersonnelles' => true,
        'langues' => true,
        'performances' => true,
    ];
}
