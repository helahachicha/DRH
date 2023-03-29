<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Indicateursuivis Model
 *
 * @property \App\Model\Table\SouscompetencesTable&\Cake\ORM\Association\BelongsTo $Souscompetences
 *
 * @method \App\Model\Entity\Indicateursuivi newEmptyEntity()
 * @method \App\Model\Entity\Indicateursuivi newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Indicateursuivi[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Indicateursuivi get($primaryKey, $options = [])
 * @method \App\Model\Entity\Indicateursuivi findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Indicateursuivi patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Indicateursuivi[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Indicateursuivi|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Indicateursuivi saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Indicateursuivi[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Indicateursuivi[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Indicateursuivi[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Indicateursuivi[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class IndicateursuivisTable extends Table
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

        $this->setTable('indicateursuivis');
        $this->setDisplayField('label');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Souscompetences', [
            'foreignKey' => 'souscompetence_id',
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
            ->scalar('label6')
            ->maxLength('label6', 255)
            ->requirePresence('label6', 'create')
            ->notEmptyString('label6');

        $validator
            ->integer('souscompetence_id')
            ->notEmptyString('souscompetence_id');

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

        return $rules;
    }
}
