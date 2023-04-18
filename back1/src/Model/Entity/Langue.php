<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Langue Entity
 *
 * @property int $id
 * @property string $arabe
 * @property string $francais
 * @property string $anglais
 * @property string $autre
 * @property int $informationprofessionnelle_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Informationprofessionnelle $informationprofessionnelle
 */
class Langue extends Entity
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
        'arabe' => true,
        'francais' => true,
        'anglais' => true,
        'autre' => true,
        'informationprofessionnelle_id' => true,
        'created' => true,
        'modified' => true,
        'informationprofessionnelle' => true,
    ];
}
