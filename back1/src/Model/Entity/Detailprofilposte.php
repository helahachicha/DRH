<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Detailprofilposte Entity
 *
 * @property int $id
 * @property string $fonction
 * @property string $categorie
 * @property string $superhierar
 * @property string $supervision
 * @property string $interim
 * @property int $profilposte_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Profilposte $profilposte
 * @property \App\Model\Entity\Competence[] $competences
 */
class Detailprofilposte extends Entity
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
        'categorie' => true,
        'superhierar' => true,
        'supervision' => true,
        'interim' => true,
        'profilposte_id' => true,
        'created' => true,
        'modified' => true,
        'profilposte' => true,
        'competences' => true,
    ];
}
