<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Idproposte Entity
 *
 * @property int $majn
 * @property \Cake\I18n\FrozenDate $du
 * @property string $Fonction
 * @property string $Categorie
 * @property string $Suphier
 * @property string $Super
 * @property string $Interim
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Idproposte extends Entity
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
        'majn' => true,
        'du' => true,
        'Fonction' => true,
        'Categorie' => true,
        'Suphier' => true,
        'Super' => true,
        'Interim' => true,
        'created' => true,
        'modified' => true,
    ];
}
