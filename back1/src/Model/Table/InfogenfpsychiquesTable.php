<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Infogenfpsychiques Model
 *
 * @method \App\Model\Entity\Infogenfpsychique newEmptyEntity()
 * @method \App\Model\Entity\Infogenfpsychique newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Infogenfpsychique[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Infogenfpsychique get($primaryKey, $options = [])
 * @method \App\Model\Entity\Infogenfpsychique findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Infogenfpsychique patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Infogenfpsychique[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Infogenfpsychique|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Infogenfpsychique saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Infogenfpsychique[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Infogenfpsychique[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Infogenfpsychique[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Infogenfpsychique[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class InfogenfpsychiquesTable extends Table
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

        $this->setTable('infogenfpsychiques');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Indicateurcomps', [
            'foreignKey' => 'indicateurcomp_id',
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
            ->integer('indicateurcomp_id')
            ->notEmptyString('indicateurcomp_id');

        $validator
            ->integer('points')
            ->requirePresence('points', 'create')
            ->notEmptyString('points');

        $validator
            ->scalar('nomprenom')
            ->maxLength('nomprenom', 255)
            ->requirePresence('nomprenom', 'create')
            ->notEmptyString('nomprenom');

        $validator
            ->date('dateevaluation')
            ->requirePresence('dateevaluation', 'create')
            ->notEmptyDate('dateevaluation');

        $validator
            ->scalar('objetevaluation')
            ->maxLength('objetevaluation', 255)
            ->requirePresence('objetevaluation', 'create')
            ->notEmptyString('objetevaluation');

        $validator
            ->scalar('decisiondirection')
            ->maxLength('decisiondirection', 255)
            ->requirePresence('decisiondirection', 'create')
            ->notEmptyString('decisiondirection');

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
        $rules->add($rules->existsIn('indicateurcomp_id', 'Indicateurcomps'), ['errorField' => 'indicateurcomp_id']);

        return $rules;
    }
}
