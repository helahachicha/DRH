<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Activiteloisirfr Entity
 *
 * @property int $id
 * @property string $activitesportive
 * @property string $lequelsport
 * @property string $activitecreative
 * @property string $lequelcreative
 * @property string $activiteinventivite
 * @property string $activitecorporelle
 * @property string $jeureflexion
 * @property string $exerceractivite
 * @property string $pourquoiexercer
 * @property string $salledesport
 * @property string $joursdispo
 * @property string $critereenfance
 * @property string $beaumoment
 * @property string $mauvaismoment
 * @property string $activitebenevolat
 * @property string $lequelbenevolat
 * @property string $lieuact
 * @property string $exercezactivite
 * @property int $infoprofessionnelle_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Infoprofessionnelle $infoprofessionnelle
 */
class Activiteloisirfr extends Entity
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
        'activitesportive' => true,
        'lequelsport' => true,
        'activitecreative' => true,
        'lequelcreative' => true,
        'activiteinventivite' => true,
        'activitecorporelle' => true,
        'jeureflexion' => true,
        'exerceractivite' => true,
        'pourquoiexercer' => true,
        'salledesport' => true,
        'joursdispo' => true,
        'critereenfance' => true,
        'beaumoment' => true,
        'mauvaismoment' => true,
        'activitebenevolat' => true,
        'lequelbenevolat' => true,
        'lieuact' => true,
        'exercezactivite' => true,
        'infoprofessionnelle_id' => true,
        'created' => true,
        'modified' => true,
        'infoprofessionnelle' => true,
    ];
}
