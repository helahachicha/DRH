<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Echelleevaluations Model
 *
 * @method \App\Model\Entity\Echelleevaluation newEmptyEntity()
 * @method \App\Model\Entity\Echelleevaluation newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Echelleevaluation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Echelleevaluation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Echelleevaluation findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Echelleevaluation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Echelleevaluation[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Echelleevaluation|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Echelleevaluation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Echelleevaluation[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Echelleevaluation[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Echelleevaluation[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Echelleevaluation[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EchelleevaluationsTable extends Table
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

        $this->setTable('echelleevaluations');
        $this->setDisplayField('label');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('abreviation')
            ->maxLength('abreviation', 255)
            ->requirePresence('abreviation', 'create')
            ->notEmptyString('abreviation');

        $validator
            ->integer('valeur')
            ->requirePresence('valeur', 'create')
            ->notEmptyString('valeur');

        return $validator;
    }
}
