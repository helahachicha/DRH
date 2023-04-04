<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Competences Model
 *
 * @property \App\Model\Table\DetailprofilpostesTable&\Cake\ORM\Association\HasMany $Detailprofilpostes
 * @property \App\Model\Table\IndicateursuivisTable&\Cake\ORM\Association\HasMany $Indicateursuivis
 * @property \App\Model\Table\SouscompetencesTable&\Cake\ORM\Association\HasMany $Souscompetences
 *
 * @method \App\Model\Entity\Competence newEmptyEntity()
 * @method \App\Model\Entity\Competence newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Competence[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Competence get($primaryKey, $options = [])
 * @method \App\Model\Entity\Competence findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Competence patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Competence[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Competence|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Competence saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Competence[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Competence[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Competence[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Competence[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CompetencesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('competences');
        $this->setDisplayField('label');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Detailprofilpostes', [
            'foreignKey' => 'competence_id',
        ]);
        $this->hasMany('Indicateursuivis', [
            'foreignKey' => 'competence_id',
        ]);
        $this->hasMany('Souscompetences', [
            'foreignKey' => 'competence_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('label')
            ->maxLength('label', 255)
            ->requirePresence('label', 'create')
            ->notEmptyString('label');

        $validator
            ->scalar('soucompetence')
            ->maxLength('soucompetence', 255)
            ->requirePresence('soucompetence', 'create')
            ->notEmptyString('soucompetence');

        return $validator;
    }
}
