<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Casmariage Entity
 *
 * @property int $id
 * @property string $nomprenomep
 * @property \Cake\I18n\FrozenDate $datenep
 * @property string $niveauetudeep
 * @property string $fonctionep
 * @property int $salaireep
 * @property string $etatep
 * @property int $infoprofessionnelle_id
 * @property int $created
 * @property int $modified
 *
 * @property \App\Model\Entity\Infoprofessionnelle $infoprofessionnelle
 */
class Casmariage extends Entity
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
        'nomprenomep' => true,
        'datenep' => true,
        'niveauetudeep' => true,
        'fonctionep' => true,
        'salaireep' => true,
        'etatep' => true,
        'infoprofessionnelle_id' => true,
        'created' => true,
        'modified' => true,
        'infoprofessionnelle' => true,
    ];
}
