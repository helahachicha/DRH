<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ficherenseignement Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $datefr
 * @property int $npagefr
 * @property string $nomprenomfr
 * @property string $adressefr
 * @property int $telprofefr
 * @property int $telpersofr
 * @property int $cantactcasurgfr
 * @property string $mailprofefr
 * @property string $mailpersfr
 * @property string $servicetrafr
 * @property string $postefr
 * @property \Cake\I18n\FrozenDate $datenaifr
 * @property string $lieufr
 * @property string $nationalitefr
 * @property int $ncinfr
 * @property string $ncindelivreefr
 * @property \Cake\I18n\FrozenDate $ncinlefr
 * @property string $ouipermisfr
 * @property int $tempsdotramfr
 * @property int $tempsdotrahfr
 * @property string $ouimdquandfr
 * @property string $ouisallesportfr
 * @property string $critereenfancefr
 * @property string $beaumomentfr
 * @property string $mauvaismometfr
 * @property string $pointforcefr
 * @property string $pointameliorefr
 * @property string $npepouxfr
 * @property \Cake\I18n\FrozenDate $datnaiepfr
 * @property string $niveauetudepfr
 * @property string $fonctionepfr
 * @property float $salaireepfr
 * @property string $etatepouxfr
 * @property string $specialitefr1
 * @property string $specialitefr2
 * @property string $specialitefr3
 * @property string $specialitefr4
 * @property string $anneefr1
 * @property string $anneefr2
 * @property string $anneefr3
 * @property string $anneefr4
 * @property string $etablissfr1
 * @property string $etablissfr2
 * @property string $etablissfr3
 * @property string $etablissfr4
 * @property string $ouiactbenefr
 * @property string $lieuactbenefr
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Ficherenseignement extends Entity
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
        'datefr' => true,
        'npagefr' => true,
        'nomprenomfr' => true,
        'adressefr' => true,
        'telprofefr' => true,
        'telpersofr' => true,
        'cantactcasurgfr' => true,
        'mailprofefr' => true,
        'mailpersfr' => true,
        'servicetrafr' => true,
        'postefr' => true,
        'datenaifr' => true,
        'lieufr' => true,
        'nationalitefr' => true,
        'ncinfr' => true,
        'ncindelivreefr' => true,
        'ncinlefr' => true,
        'ouipermisfr' => true,
        'tempsdotramfr' => true,
        'tempsdotrahfr' => true,
        'ouimdquandfr' => true,
        'ouisallesportfr' => true,
        'critereenfancefr' => true,
        'beaumomentfr' => true,
        'mauvaismometfr' => true,
        'pointforcefr' => true,
        'pointameliorefr' => true,
        'npepouxfr' => true,
        'datnaiepfr' => true,
        'niveauetudepfr' => true,
        'fonctionepfr' => true,
        'salaireepfr' => true,
        'etatepouxfr' => true,
        'specialitefr1' => true,
        'specialitefr2' => true,
        'specialitefr3' => true,
        'specialitefr4' => true,
        'anneefr1' => true,
        'anneefr2' => true,
        'anneefr3' => true,
        'anneefr4' => true,
        'etablissfr1' => true,
        'etablissfr2' => true,
        'etablissfr3' => true,
        'etablissfr4' => true,
        'ouiactbenefr' => true,
        'lieuactbenefr' => true,
        'created' => true,
        'modified' => true,
    ];
}
