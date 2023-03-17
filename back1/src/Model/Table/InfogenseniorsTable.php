<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Infogenseniors Model
 *
 * @method \App\Model\Entity\Infogensenior newEmptyEntity()
 * @method \App\Model\Entity\Infogensenior newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Infogensenior[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Infogensenior get($primaryKey, $options = [])
 * @method \App\Model\Entity\Infogensenior findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Infogensenior patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Infogensenior[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Infogensenior|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Infogensenior saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Infogensenior[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Infogensenior[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Infogensenior[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Infogensenior[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class InfogenseniorsTable extends Table
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

        $this->setTable('infogenseniors');
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
