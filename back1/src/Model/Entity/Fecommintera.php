<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Fecommintera Entity
 *
 * @property int $id
 * @property int $numeroci
 * @property string $indimesureci
 * @property int $pointsci
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Fecommintera extends Entity
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
        'numeroci' => true,
        'indimesureci' => true,
        'pointsci' => true,
        'created' => true,
        'modified' => true,
    ];
}
