<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Totalpolyvalences Model
 *
 * @method \App\Model\Entity\Totalpolyvalence newEmptyEntity()
 * @method \App\Model\Entity\Totalpolyvalence newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Totalpolyvalence[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Totalpolyvalence get($primaryKey, $options = [])
 * @method \App\Model\Entity\Totalpolyvalence findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Totalpolyvalence patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Totalpolyvalence[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Totalpolyvalence|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Totalpolyvalence saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Totalpolyvalence[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Totalpolyvalence[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Totalpolyvalence[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Totalpolyvalence[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TotalpolyvalencesTable extends Table
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

        $this->setTable('totalpolyvalences');
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
