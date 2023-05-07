<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Totalpolycompetences Model
 *
 * @method \App\Model\Entity\Totalpolycompetence newEmptyEntity()
 * @method \App\Model\Entity\Totalpolycompetence newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Totalpolycompetence[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Totalpolycompetence get($primaryKey, $options = [])
 * @method \App\Model\Entity\Totalpolycompetence findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Totalpolycompetence patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Totalpolycompetence[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Totalpolycompetence|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Totalpolycompetence saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Totalpolycompetence[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Totalpolycompetence[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Totalpolycompetence[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Totalpolycompetence[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TotalpolycompetencesTable extends Table
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

        $this->setTable('totalpolycompetences');
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
            ->numeric('valeur')
            ->requirePresence('valeur', 'create')
            ->notEmptyString('valeur');

        return $validator;
    }
}
