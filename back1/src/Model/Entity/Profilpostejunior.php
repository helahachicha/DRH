<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Profilpostejunior Entity
 *
 * @property int $id
 * @property string $comptech
 * @property string $contenucomptech
 * @property string $comporgan
 * @property string $gestemps
 * @property string $nvisegestemp
 * @property string $isuivigestemp
 * @property string $compcompor
 * @property string $geek
 * @property string $autod
 * @property string $positivite
 * @property string $commintera
 * @property string $nvisecommintera
 * @property string $isuivicommintera
 * @property string $tracoll
 * @property string $nvisetracoll
 * @property string $isuivitracoll
 * @property string $resprob
 * @property string $nviseresprob
 * @property string $isuiviresprob
 * @property string $servexcell
 * @property string $nviseservexcell
 * @property string $isuiviservexcell
 * @property string $droit
 * @property string $contenudroit
 * @property string $devoir
 * @property string $contenudevoir
 * @property string $validation
 * @property string $contenuvalid
 * @property string $fonction
 * @property string $nompre
 * @property string $fonction1
 * @property string $nompre1
 * @property string $fonction2
 * @property string $nompre2
 */
class Profilpostejunior extends Entity
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
        'comptech' => true,
        'contenucomptech' => true,
        'comporgan' => true,
        'gestemps' => true,
        'nvisegestemp' => true,
        'isuivigestemp' => true,
        'compcompor' => true,
        'geek' => true,
        'autod' => true,
        'positivite' => true,
        'commintera' => true,
        'nvisecommintera' => true,
        'isuivicommintera' => true,
        'tracoll' => true,
        'nvisetracoll' => true,
        'isuivitracoll' => true,
        'resprob' => true,
        'nviseresprob' => true,
        'isuiviresprob' => true,
        'servexcell' => true,
        'nviseservexcell' => true,
        'isuiviservexcell' => true,
        'droit' => true,
        'contenudroit' => true,
        'devoir' => true,
        'contenudevoir' => true,
        'validation' => true,
        'contenuvalid' => true,
        'fonction' => true,
        'nompre' => true,
        'fonction1' => true,
        'nompre1' => true,
        'fonction2' => true,
        'nompre2' => true,
    ];
}
