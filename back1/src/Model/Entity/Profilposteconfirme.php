<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Profilposteconfirme Entity
 *
 * @property int $id
 * @property string $comptechdc
 * @property string $contenucomptechdc
 * @property string $comporgandc
 * @property string $gestempsdc
 * @property string $nvisegestempdc
 * @property string $isuivigestempdc
 * @property string $compcompordc
 * @property string $autonomiedc
 * @property string $comminteradc
 * @property string $nvisecomminteradc
 * @property string $isuivicomminteradc
 * @property string $tracolldc
 * @property string $nvisetracolldc
 * @property string $isuivitracolldc
 * @property string $resprobdc
 * @property string $nviseresprobdc
 * @property string $isuiviresprobdc
 * @property string $servexcelldc
 * @property string $nviseservexcelldc
 * @property string $isuiviservexcelldc
 * @property string $raisconcepdc
 * @property string $nviseraisconcepdc
 * @property string $isuiviraisconcepdc
 * @property string $droitdc
 * @property string $contenudroitdc
 * @property string $devoirdc
 * @property string $contenudevoirdc
 * @property string $validationdc
 * @property string $contenuvaliddc
 * @property string $fonctiondc
 * @property string $nompredc
 * @property string $fonctiondc1
 * @property string $nompredc1
 * @property string $fonctiondc2
 * @property string $nompredc2
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Profilposteconfirme extends Entity
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
        'comptechdc' => true,
        'contenucomptechdc' => true,
        'comporgandc' => true,
        'gestempsdc' => true,
        'nvisegestempdc' => true,
        'isuivigestempdc' => true,
        'compcompordc' => true,
        'autonomiedc' => true,
        'comminteradc' => true,
        'nvisecomminteradc' => true,
        'isuivicomminteradc' => true,
        'tracolldc' => true,
        'nvisetracolldc' => true,
        'isuivitracolldc' => true,
        'resprobdc' => true,
        'nviseresprobdc' => true,
        'isuiviresprobdc' => true,
        'servexcelldc' => true,
        'nviseservexcelldc' => true,
        'isuiviservexcelldc' => true,
        'raisconcepdc' => true,
        'nviseraisconcepdc' => true,
        'isuiviraisconcepdc' => true,
        'droitdc' => true,
        'contenudroitdc' => true,
        'devoirdc' => true,
        'contenudevoirdc' => true,
        'validationdc' => true,
        'contenuvaliddc' => true,
        'fonctiondc' => true,
        'nompredc' => true,
        'fonctiondc1' => true,
        'nompredc1' => true,
        'fonctiondc2' => true,
        'nompredc2' => true,
        'created' => true,
        'modified' => true,
    ];
}
