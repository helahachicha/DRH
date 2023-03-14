<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Profilposte Entity
 *
 * @property string $ct
 * @property string $contenuct
 * @property string $co
 * @property string $gt
 * @property string $nivvisegt
 * @property string $isuivigt
 * @property string $cc
 * @property string $ge
 * @property string $au
 * @property string $po
 * @property string $ci
 * @property string $nivviseci
 * @property string $isuivici
 * @property string $tc
 * @property string $nivvisetc
 * @property string $isuivitc
 * @property string $rp
 * @property string $nivviserp
 * @property string $isuivirp
 * @property string $se
 * @property string $nivvisese
 * @property string $isuivise
 * @property string $dr
 * @property string $contenudroit
 * @property string $dev
 * @property string $contenudev
 * @property string $validation
 * @property string $fonc
 * @property string $np
 * @property string $fonc1
 * @property string $np1
 * @property string $fonc2
 * @property string $np2
 */
class Profilposte extends Entity
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
        'ct' => true,
        'contenuct' => true,
        'co' => true,
        'gt' => true,
        'nivvisegt' => true,
        'isuivigt' => true,
        'cc' => true,
        'ge' => true,
        'au' => true,
        'po' => true,
        'ci' => true,
        'nivviseci' => true,
        'isuivici' => true,
        'tc' => true,
        'nivvisetc' => true,
        'isuivitc' => true,
        'rp' => true,
        'nivviserp' => true,
        'isuivirp' => true,
        'se' => true,
        'nivvisese' => true,
        'isuivise' => true,
        'dr' => true,
        'contenudroit' => true,
        'dev' => true,
        'contenudev' => true,
        'validation' => true,
        'fonc' => true,
        'np' => true,
        'fonc1' => true,
        'np1' => true,
        'fonc2' => true,
        'np2' => true,
    ];
}
