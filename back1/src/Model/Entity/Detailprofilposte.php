<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Detailprofilposte Entity
 *
 * @property int $id
 * @property string $fonction
 * @property string $superhierar
 * @property string $supervision
 * @property string $interim
 * @property string $competence
 * @property string $souscompetence
 * @property string $niveauvise
 * @property string $indicateursuivi
 * @property string $fonctionelaboration
 * @property string $fonctionverification
 * @property string $fonctionabrobation
 * @property string $nomprenomelab
 * @property string $nomprenomverif
 * @property string $nomprenomabrob
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
        'superhierar' => true,
        'supervision' => true,
        'interim' => true,
        'competence' => true,
        'souscompetence' => true,
        'niveauvise' => true,
        'indicateursuivi' => true,
        'fonctionelaboration' => true,
        'fonctionverification' => true,
        'fonctionabrobation' => true,
        'nomprenomelab' => true,
        'nomprenomverif' => true,
        'nomprenomabrob' => true,
        'profilposte_id' => true,
        'created' => true,
        'modified' => true,
        'profilposte' => true,
        'competences' => true,
    ];
}
