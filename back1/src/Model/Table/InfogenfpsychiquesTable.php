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
}
