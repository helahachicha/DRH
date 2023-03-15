<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Idpropostedc Entity
 *
 * @property int $id
 * @property int $man
 * @property \Cake\I18n\FrozenDate $duu
 * @property string $fonct
 * @property string $categori
 * @property string $supehiera
 * @property string $supervis
 * @property string $interi
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Idpropostedc extends Entity
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
        'id' => true,
        'man' => true,
        'duu' => true,
        'fonct' => true,
        'categori' => true,
        'supehiera' => true,
        'supervis' => true,
        'interi' => true,
        'created' => true,
        'modified' => true,
    ];
}
