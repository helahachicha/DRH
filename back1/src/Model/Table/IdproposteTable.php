<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Idproposte Model
 *
 * @method \App\Model\Entity\Idproposte newEmptyEntity()
 * @method \App\Model\Entity\Idproposte newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Idproposte[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Idproposte get($primaryKey, $options = [])
 * @method \App\Model\Entity\Idproposte findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Idproposte patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Idproposte[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Idproposte|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Idproposte saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Idproposte[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Idproposte[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Idproposte[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Idproposte[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class IdproposteTable extends Table
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

        $this->setTable('idproposte');

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
            ->integer('majn')
            ->requirePresence('majn', 'create')
            ->notEmptyString('majn');

        $validator
            ->date('du')
            ->requirePresence('du', 'create')
            ->notEmptyDate('du');

        $validator
            ->scalar('Fonction')
            ->maxLength('Fonction', 255)
            ->requirePresence('Fonction', 'create')
            ->notEmptyString('Fonction');

        $validator
            ->scalar('Categorie')
            ->maxLength('Categorie', 255)
            ->requirePresence('Categorie', 'create')
            ->notEmptyString('Categorie');

        $validator
            ->scalar('Suphier')
            ->maxLength('Suphier', 255)
            ->requirePresence('Suphier', 'create')
            ->notEmptyString('Suphier');

        $validator
            ->scalar('Super')
            ->maxLength('Super', 255)
            ->requirePresence('Super', 'create')
            ->notEmptyString('Super');

        $validator
            ->scalar('Interim')
            ->maxLength('Interim', 255)
            ->requirePresence('Interim', 'create')
            ->notEmptyString('Interim');

        return $validator;
    }
}
