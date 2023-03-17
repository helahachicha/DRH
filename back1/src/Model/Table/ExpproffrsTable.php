<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Expproffrs Model
 *
 * @method \App\Model\Entity\Expproffr newEmptyEntity()
 * @method \App\Model\Entity\Expproffr newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Expproffr[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Expproffr get($primaryKey, $options = [])
 * @method \App\Model\Entity\Expproffr findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Expproffr patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Expproffr[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Expproffr|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Expproffr saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Expproffr[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Expproffr[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Expproffr[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Expproffr[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ExpproffrsTable extends Table
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

        $this->setTable('expproffrs');
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
            ->scalar('societeex')
            ->maxLength('societeex', 255)
            ->requirePresence('societeex', 'create')
            ->notEmptyString('societeex');

        $validator
            ->scalar('duauex')
            ->maxLength('duauex', 255)
            ->requirePresence('duauex', 'create')
            ->notEmptyString('duauex');

        $validator
            ->scalar('fonctionex')
            ->maxLength('fonctionex', 255)
            ->requirePresence('fonctionex', 'create')
            ->notEmptyString('fonctionex');

        $validator
            ->scalar('inidiffex')
            ->maxLength('inidiffex', 255)
            ->requirePresence('inidiffex', 'create')
            ->notEmptyString('inidiffex');

        $validator
            ->scalar('salaireex')
            ->maxLength('salaireex', 255)
            ->requirePresence('salaireex', 'create')
            ->notEmptyString('salaireex');

        return $validator;
    }
}
