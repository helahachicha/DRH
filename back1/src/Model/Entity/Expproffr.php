<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Expproffr Entity
 *
 * @property int $id
 * @property string $societeex
 * @property string $duauex
 * @property string $fonctionex
 * @property string $inidiffex
 * @property string $salaireex
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Expproffr extends Entity
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
        'societeex' => true,
        'duauex' => true,
        'fonctionex' => true,
        'inidiffex' => true,
        'salaireex' => true,
        'created' => true,
        'modified' => true,
    ];
}
