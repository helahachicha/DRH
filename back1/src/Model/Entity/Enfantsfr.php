<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Enfantsfr Entity
 *
 * @property int $id
 * @property int $ordreen
 * @property string $prenomen
 * @property \Cake\I18n\FrozenDate $datenaien
 * @property string $niveauetudeen
 * @property string $centreintereten
 * @property string $etatsanteen
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Enfantsfr extends Entity
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
        'ordreen' => true,
        'prenomen' => true,
        'datenaien' => true,
        'niveauetudeen' => true,
        'centreintereten' => true,
        'etatsanteen' => true,
        'created' => true,
        'modified' => true,
    ];
}
