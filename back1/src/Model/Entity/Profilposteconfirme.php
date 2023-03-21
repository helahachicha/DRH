<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Profilposteconfirme Entity
 *
 * @property int $id
 * @property int $competence_id
 * @property int $indicateurcomp_id
 * @property string $contenucomptechdc
 * @property string $nvisegestempdc
 * @property string $isuivigestempdc
 * @property string $nvisecomminteradc
 * @property string $isuivicomminteradc
 * @property string $nvisetracolldc
 * @property string $isuivitracolldc
 * @property string $nviseresprobdc
 * @property string $isuiviresprobdc
 * @property string $nviseservexcelldc
 * @property string $isuiviservexcelldc
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
        'competence_id' => true,
        'indicateurcomp_id' => true,
        'contenucomptechdc' => true,
        'nvisegestempdc' => true,
        'isuivigestempdc' => true,
        'nvisecomminteradc' => true,
        'isuivicomminteradc' => true,
        'nvisetracolldc' => true,
        'isuivitracolldc' => true,
        'nviseresprobdc' => true,
        'isuiviresprobdc' => true,
        'nviseservexcelldc' => true,
        'isuiviservexcelldc' => true,
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
