<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Infogenconfime Entity
 *
 * @property int $id
 * @property int $majndc
 * @property \Cake\I18n\FrozenDate $dudc
 * @property string $Fonctiondc
 * @property string $categoriedc
 * @property string $Suphierdc
 * @property string $Superdc
 * @property string $interidc
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Infogenconfime extends Entity
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
        'majndc' => true,
        'dudc' => true,
        'Fonctiondc' => true,
        'categoriedc' => true,
        'Suphierdc' => true,
        'Superdc' => true,
        'interidc' => true,
        'created' => true,
        'modified' => true,
    ];
}
