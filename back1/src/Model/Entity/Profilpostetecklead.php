<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Profilpostetecklead Entity
 *
 * @property int $id
 * @property string $comptechdt
 * @property string $contenucomptechdt
 * @property string $comporgandt
 * @property string $gestempsdt
 * @property string $nvisegestempdt
 * @property string $isuivigestempdt
 * @property string $compcompordt
 * @property string $comminteradt
 * @property string $nvisecomminteradt
 * @property string $isuivicomminteradt
 * @property string $tracolldt
 * @property string $nvisetracolldt
 * @property string $isuivitracolldt
 * @property string $resprobdt
 * @property string $nviseresprobdt
 * @property string $isuiviresprobdt
 * @property string $raisanaldt
 * @property string $nviseraisanaldt
 * @property string $isuiviraisanaldt
 * @property string $leadershipdt
 * @property string $nviseleadershipdt
 * @property string $isuivileadershipdt
 * @property string $soudevdt
 * @property string $nvisesoudevdt
 * @property string $isuivisoudevdt
 * @property string $droitdt
 * @property string $contenudroitdt
 * @property string $devoirdt
 * @property string $contenudevoirdt
 * @property string $validationdt
 * @property string $contenuvaliddt
 * @property string $fonctiondt
 * @property string $nompredt
 * @property string $fonctiondt1
 * @property string $nompredt1
 * @property string $fonctiondt2
 * @property string $nompredt2
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Profilpostetecklead extends Entity
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
        'comptechdt' => true,
        'contenucomptechdt' => true,
        'comporgandt' => true,
        'gestempsdt' => true,
        'nvisegestempdt' => true,
        'isuivigestempdt' => true,
        'compcompordt' => true,
        'comminteradt' => true,
        'nvisecomminteradt' => true,
        'isuivicomminteradt' => true,
        'tracolldt' => true,
        'nvisetracolldt' => true,
        'isuivitracolldt' => true,
        'resprobdt' => true,
        'nviseresprobdt' => true,
        'isuiviresprobdt' => true,
        'raisanaldt' => true,
        'nviseraisanaldt' => true,
        'isuiviraisanaldt' => true,
        'leadershipdt' => true,
        'nviseleadershipdt' => true,
        'isuivileadershipdt' => true,
        'soudevdt' => true,
        'nvisesoudevdt' => true,
        'isuivisoudevdt' => true,
        'droitdt' => true,
        'contenudroitdt' => true,
        'devoirdt' => true,
        'contenudevoirdt' => true,
        'validationdt' => true,
        'contenuvaliddt' => true,
        'fonctiondt' => true,
        'nompredt' => true,
        'fonctiondt1' => true,
        'nompredt1' => true,
        'fonctiondt2' => true,
        'nompredt2' => true,
        'created' => true,
        'modified' => true,
    ];
}
