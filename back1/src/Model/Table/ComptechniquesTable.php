<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Comptechniques Model
 *
 * @property \App\Model\Table\TesttechniquesTable&\Cake\ORM\Association\BelongsTo $Testtechniques
 * @property \App\Model\Table\QuestionsTable&\Cake\ORM\Association\HasMany $Questions
 *
 * @method \App\Model\Entity\Comptechnique newEmptyEntity()
 * @method \App\Model\Entity\Comptechnique newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Comptechnique[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Comptechnique get($primaryKey, $options = [])
 * @method \App\Model\Entity\Comptechnique findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Comptechnique patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Comptechnique[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Comptechnique|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Comptechnique saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Comptechnique[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Comptechnique[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Comptechnique[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Comptechnique[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ComptechniquesTable extends Table
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

        $this->setTable('comptechniques');
        $this->setDisplayField('label');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Testtechniques', [
            'foreignKey' => 'testtechnique_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Questions', [
            'foreignKey' => 'comptechnique_id',
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
            ->scalar('labelcomptech')
            ->maxLength('labelcomptech', 255)
            ->requirePresence('labelcomptech', 'create')
            ->notEmptyString('labelcomptech');

        $validator
            ->integer('testtechnique_id')
            ->notEmptyString('testtechnique_id');

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
        $rules->add($rules->existsIn('testtechnique_id', 'Testtechniques'), ['errorField' => 'testtechnique_id']);

        return $rules;
    }
}
