<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Indicasoucompas Model
 *
 * @property \App\Model\Table\SouscompetencesTable&\Cake\ORM\Association\BelongsTo $Souscompetences
 * @property \App\Model\Table\DetailprofilpostesTable&\Cake\ORM\Association\BelongsTo $Detailprofilpostes
 *
 * @method \App\Model\Entity\Indicasoucompa newEmptyEntity()
 * @method \App\Model\Entity\Indicasoucompa newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Indicasoucompa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Indicasoucompa get($primaryKey, $options = [])
 * @method \App\Model\Entity\Indicasoucompa findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Indicasoucompa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Indicasoucompa[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Indicasoucompa|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Indicasoucompa saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Indicasoucompa[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Indicasoucompa[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Indicasoucompa[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Indicasoucompa[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class IndicasoucompasTable extends Table
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

        $this->setTable('indicasoucompas');
        $this->setDisplayField('label');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Souscompetences', [
            'foreignKey' => 'souscompetence_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Detailprofilpostes', [
            'foreignKey' => 'detailprofilposte_id',
            'joinType' => 'INNER',
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
            ->maxLength('label', 400)
            ->allowEmptyString('label');

        $validator
            ->integer('souscompetence_id')
            ->notEmptyString('souscompetence_id');

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
        $rules->add($rules->existsIn('souscompetence_id', 'Souscompetences'), ['errorField' => 'souscompetence_id']);
        $rules->add($rules->existsIn('detailprofilposte_id', 'Detailprofilpostes'), ['errorField' => 'detailprofilposte_id']);

        return $rules;
    }
}
