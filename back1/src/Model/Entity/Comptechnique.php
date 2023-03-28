<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Comptechnique Entity
 *
 * @property int $id
 * @property string $label
 * @property int $testtechnique_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Question[] $questions
 * @property \App\Model\Entity\Testtechnique[] $testtechniques
 */
class Comptechnique extends Entity
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
        'label' => true,
        'testtechnique_id' => true,
        'created' => true,
        'modified' => true,
        'questions' => true,
        'testtechniques' => true,
    ];
}
