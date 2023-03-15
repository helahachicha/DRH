<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Idpropostedc Model
 *
 * @method \App\Model\Entity\Idpropostedc newEmptyEntity()
 * @method \App\Model\Entity\Idpropostedc newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Idpropostedc[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Idpropostedc get($primaryKey, $options = [])
 * @method \App\Model\Entity\Idpropostedc findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Idpropostedc patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Idpropostedc[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Idpropostedc|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Idpropostedc saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Idpropostedc[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Idpropostedc[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Idpropostedc[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Idpropostedc[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class IdpropostedcTable extends Table
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

        $this->setTable('idpropostedc');

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
            ->integer('id')
            ->requirePresence('id', 'create')
            ->notEmptyString('id');

        $validator
            ->integer('man')
            ->requirePresence('man', 'create')
            ->notEmptyString('man');

        $validator
            ->date('duu')
            ->requirePresence('duu', 'create')
            ->notEmptyDate('duu');

        $validator
            ->scalar('fonct')
            ->maxLength('fonct', 255)
            ->requirePresence('fonct', 'create')
            ->notEmptyString('fonct');

        $validator
            ->scalar('categori')
            ->maxLength('categori', 255)
            ->requirePresence('categori', 'create')
            ->notEmptyString('categori');

        $validator
            ->scalar('supehiera')
            ->maxLength('supehiera', 255)
            ->requirePresence('supehiera', 'create')
            ->notEmptyString('supehiera');

        $validator
            ->scalar('supervis')
            ->maxLength('supervis', 255)
            ->requirePresence('supervis', 'create')
            ->notEmptyString('supervis');

        $validator
            ->scalar('interi')
            ->maxLength('interi', 255)
            ->requirePresence('interi', 'create')
            ->notEmptyString('interi');

        return $validator;
    }
}
