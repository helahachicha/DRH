<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Infogencatpp Entity
 *
 * @property int $id
 * @property string $fonction
 * @property string $label
 * @property string $suphierar
 * @property string $supervision
 * @property string $interim
 * @property int $categorie_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Category $category
 */
class Infogencatpp extends Entity
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
        'fonction' => true,
        'label' => true,
        'suphierar' => true,
        'supervision' => true,
        'interim' => true,
        'categorie_id' => true,
        'created' => true,
        'modified' => true,
        'category' => true,
    ];
}
