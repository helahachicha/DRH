<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Polyvalences Model
 *
 * @property \App\Model\Table\MatricecompetencesTable&\Cake\ORM\Association\BelongsTo $Matricecompetences
 *
 * @method \App\Model\Entity\Polyvalence newEmptyEntity()
 * @method \App\Model\Entity\Polyvalence newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Polyvalence[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Polyvalence get($primaryKey, $options = [])
 * @method \App\Model\Entity\Polyvalence findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Polyvalence patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Polyvalence[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Polyvalence|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Polyvalence saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Polyvalence[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Polyvalence[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Polyvalence[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Polyvalence[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PolyvalencesTable extends Table
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

        $this->setTable('polyvalences');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Matricecompetences', [
            'foreignKey' => 'matricecompetence_id',
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
            ->scalar('valeur')
            ->maxLength('valeur', 255)
            ->requirePresence('valeur', 'create')
            ->notEmptyString('valeur');

        $validator
            ->integer('matricecompetence_id')
            ->notEmptyString('matricecompetence_id');

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
        $rules->add($rules->existsIn('matricecompetence_id', 'Matricecompetences'), ['errorField' => 'matricecompetence_id']);

        return $rules;
    }
}
