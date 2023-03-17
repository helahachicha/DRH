<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Profilpostesenior Entity
 *
 * @property int $id
 * @property string $comptechds
 * @property string $contenucomptechds
 * @property string $comporgands
 * @property string $gestempsds
 * @property string $nvisegestempds
 * @property string $isuivigestempds
 * @property string $compcompords
 * @property string $comminterads
 * @property string $nvisecomminterads
 * @property string $isuivicomminterads
 * @property string $tracollds
 * @property string $nvisetracollds
 * @property string $isuivitracollds
 * @property string $resprobds
 * @property string $nviseresprobds
 * @property string $isuiviresprobds
 * @property string $servexcellds
 * @property string $nviseservexcellds
 * @property string $isuiviservexcellds
 * @property string $raisconcepds
 * @property string $nviseraisconcepds
 * @property string $isuiviraisconcepds
 * @property string $leadershipds
 * @property string $nviseleadershipds
 * @property string $isuivileadershipds
 * @property string $droitds
 * @property string $contenudroitds
 * @property string $devoirds
 * @property string $contenudevoirds
 * @property string $validationds
 * @property string $contenuvalidds
 * @property string $fonctionds
 * @property string $nompreds
 * @property string $fonctionds1
 * @property string $nompreds1
 * @property string $fonctionds2
 * @property string $nompreds2
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Profilpostesenior extends Entity
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
        'comptechds' => true,
        'contenucomptechds' => true,
        'comporgands' => true,
        'gestempsds' => true,
        'nvisegestempds' => true,
        'isuivigestempds' => true,
        'compcompords' => true,
        'comminterads' => true,
        'nvisecomminterads' => true,
        'isuivicomminterads' => true,
        'tracollds' => true,
        'nvisetracollds' => true,
        'isuivitracollds' => true,
        'resprobds' => true,
        'nviseresprobds' => true,
        'isuiviresprobds' => true,
        'servexcellds' => true,
        'nviseservexcellds' => true,
        'isuiviservexcellds' => true,
        'raisconcepds' => true,
        'nviseraisconcepds' => true,
        'isuiviraisconcepds' => true,
        'leadershipds' => true,
        'nviseleadershipds' => true,
        'isuivileadershipds' => true,
        'droitds' => true,
        'contenudroitds' => true,
        'devoirds' => true,
        'contenudevoirds' => true,
        'validationds' => true,
        'contenuvalidds' => true,
        'fonctionds' => true,
        'nompreds' => true,
        'fonctionds1' => true,
        'nompreds1' => true,
        'fonctionds2' => true,
        'nompreds2' => true,
        'created' => true,
        'modified' => true,
    ];
}
