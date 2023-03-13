<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Formainterne Entity
 *
 * @property int $id
 * @property string $tycomp
 * @property string $themforma
 * @property string $animateur
 * @property string $poste
 * @property \Cake\I18n\FrozenTime $date
 * @property string $hentrer
 * @property string $hsortie
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Formainterne extends Entity
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
        'tycomp' => true,
        'themforma' => true,
        'animateur' => true,
        'poste' => true,
        'date' => true,
        'hentrer' => true,
        'hsortie' => true,
        'created' => true,
        'modified' => true,
    ];
}
