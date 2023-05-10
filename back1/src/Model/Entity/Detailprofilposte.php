<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Detailprofilposte Entity
 *
 * @property int $id
 * @property string $fonction
 * @property int $categorie_id
 * @property int $profilposte_id
 * @property string $superhierar
 * @property string $supervision
 * @property string $interim
 * @property string $fonctionelaboration
 * @property string $fonctionverification
 * @property string $fonctionabrobation
 * @property string $nomprenomelab
 * @property string $nomprenomverif
 * @property string $nomprenomabrob
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Profilposte $profilposte
 * @property \App\Model\Entity\Formcompetence[] $formcompetences
 * @property \App\Model\Entity\Indicasoucompa[] $indicasoucompas
 * @property \App\Model\Entity\Indicateursuivi[] $indicateursuivis
 * @property \App\Model\Entity\Souscompetence[] $souscompetences
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
        'categorie_id' => true,
        'profilposte_id' => true,
        'superhierar' => true,
        'supervision' => true,
        'interim' => true,
        'fonctionelaboration' => true,
        'fonctionverification' => true,
        'fonctionabrobation' => true,
        'nomprenomelab' => true,
        'nomprenomverif' => true,
        'nomprenomabrob' => true,
        'created' => true,
        'modified' => true,
        'category' => true,
        'profilposte' => true,
        'formcompetences' => true,
        'indicasoucompas' => true,
        'indicateursuivis' => true,
        'souscompetences' => true,
    ];
}
