<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Souscompetences Model
 *
 * @property \App\Model\Table\CompetencesTable&\Cake\ORM\Association\BelongsTo $Competences
 * @property \App\Model\Table\DetailprofilpostesTable&\Cake\ORM\Association\BelongsTo $Detailprofilpostes
 * @property \App\Model\Table\IndicasoucompasTable&\Cake\ORM\Association\HasMany $Indicasoucompas
 *
 * @method \App\Model\Entity\Souscompetence newEmptyEntity()
 * @method \App\Model\Entity\Souscompetence newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Souscompetence[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Souscompetence get($primaryKey, $options = [])
 * @method \App\Model\Entity\Souscompetence findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Souscompetence patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Souscompetence[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Souscompetence|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Souscompetence saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Souscompetence[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Souscompetence[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Souscompetence[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Souscompetence[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SouscompetencesTable extends Table
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

        $this->setTable('souscompetences');
        $this->setDisplayField('label');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Competences', [
            'foreignKey' => 'competence_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Detailprofilpostes', [
            'foreignKey' => 'detailprofilposte_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Indicasoucompas', [
            'foreignKey' => 'souscompetence_id',
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
            ->allowEmptyString('label');

        $validator
            ->integer('competence_id')
            ->notEmptyString('competence_id');

        $validator
            ->integer('detailprofilposte_id')
            ->notEmptyString('detailprofilposte_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('competence_id', 'Competences'), ['errorField' => 'competence_id']);
        $rules->add($rules->existsIn('detailprofilposte_id', 'Detailprofilpostes'), ['errorField' => 'detailprofilposte_id']);

        return $rules;
    }
}
