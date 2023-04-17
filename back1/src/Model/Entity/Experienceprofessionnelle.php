<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Experienceprofessionnelle Entity
 *
 * @property int $id
 * @property string $societe
 * @property string $periode
 * @property string $fonction
 * @property string $initiative
 * @property float $salaire
 * @property int $informationprofessionnelle_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Informationprofessionnelle $informationprofessionnelle
 */
class Experienceprofessionnelle extends Entity
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
        'societe' => true,
        'periode' => true,
        'fonction' => true,
        'initiative' => true,
        'salaire' => true,
        'informationprofessionnelle_id' => true,
        'created' => true,
        'modified' => true,
        'informationprofessionnelle' => true,
    ];
}
