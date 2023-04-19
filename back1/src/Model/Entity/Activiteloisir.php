<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Activiteloisir Entity
 *
 * @property int $id
 * @property string $activitesportive
 * @property string $lequelactsportive
 * @property string $activitecreative
 * @property string $activiteinventivite
 * @property string $activitecorporelle
 * @property string $jeureflexion
 * @property string $exerceractivite
 * @property string $pourquoiexercer
 * @property string $sallesport
 * @property string $disposallesport
 * @property string $activitebenevolat
 * @property string $lequelactbenevolat
 * @property string $lieuactbenevolat
 * @property string $exerceractbenevolat
 * @property int $informationprofessionnelle_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Informationprofessionnelle $informationprofessionnelle
 */
class Activiteloisir extends Entity
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
        'lequelactsportive' => true,
        'activitecreative' => true,
        'activiteinventivite' => true,
        'activitecorporelle' => true,
        'jeureflexion' => true,
        'exerceractivite' => true,
        'pourquoiexercer' => true,
        'sallesport' => true,
        'disposallesport' => true,
        'activitebenevolat' => true,
        'lequelactbenevolat' => true,
        'lieuactbenevolat' => true,
        'exerceractbenevolat' => true,
        'informationprofessionnelle_id' => true,
        'created' => true,
        'modified' => true,
        'informationprofessionnelle' => true,
    ];
}
