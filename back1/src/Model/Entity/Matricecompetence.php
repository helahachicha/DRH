<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Matricecompetence Entity
 *
 * @property int $id
 * @property string $label
 * @property string $abreviation
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Matrix[] $matrices
 * @property \App\Model\Entity\Polyvalence[] $polyvalences
 */
class Matricecompetence extends Entity
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
        'label' => true,
        'abreviation' => true,
        'created' => true,
        'modified' => true,
        'matrices' => true,
        'polyvalences' => true,
    ];
}
