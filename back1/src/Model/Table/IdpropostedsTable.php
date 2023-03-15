<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Idproposteds Model
 *
 * @method \App\Model\Entity\Idproposted newEmptyEntity()
 * @method \App\Model\Entity\Idproposted newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Idproposted[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Idproposted get($primaryKey, $options = [])
 * @method \App\Model\Entity\Idproposted findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Idproposted patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Idproposted[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Idproposted|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Idproposted saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Idproposted[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Idproposted[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Idproposted[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Idproposted[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class IdpropostedsTable extends Table
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

        $this->setTable('idproposteds');
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
            ->integer('majnds')
            ->requirePresence('majnds', 'create')
            ->notEmptyString('majnds');

        $validator
            ->date('duds')
            ->requirePresence('duds', 'create')
            ->notEmptyDate('duds');

        $validator
            ->scalar('Fonctionds')
            ->maxLength('Fonctionds', 255)
            ->requirePresence('Fonctionds', 'create')
            ->notEmptyString('Fonctionds');

        $validator
            ->scalar('Categorieds')
            ->maxLength('Categorieds', 255)
            ->requirePresence('Categorieds', 'create')
            ->notEmptyString('Categorieds');

        $validator
            ->scalar('Suphierds')
            ->maxLength('Suphierds', 255)
            ->requirePresence('Suphierds', 'create')
            ->notEmptyString('Suphierds');

        $validator
            ->scalar('Superds')
            ->maxLength('Superds', 255)
            ->requirePresence('Superds', 'create')
            ->notEmptyString('Superds');

        $validator
            ->scalar('Interimds')
            ->maxLength('Interimds', 255)
            ->requirePresence('Interimds', 'create')
            ->notEmptyString('Interimds');

        return $validator;
    }
}
