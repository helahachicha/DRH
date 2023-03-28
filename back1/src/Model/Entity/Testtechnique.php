<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Testtechnique Entity
 *
 * @property int $id
 * @property string $duree
 * @property int $departement_id
 * @property int $poste_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Departement $departement
 * @property \App\Model\Entity\Poste $poste
 * @property \App\Model\Entity\Comptechnique[] $comptechniques
 */
class Testtechnique extends Entity
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
        'duree' => true,
        'departement_id' => true,
        'poste_id' => true,
        'created' => true,
        'modified' => true,
        'departement' => true,
        'poste' => true,
        'comptechniques' => true,
    ];
}
