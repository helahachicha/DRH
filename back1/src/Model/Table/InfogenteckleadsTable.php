<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Infogenteckleads Model
 *
 * @method \App\Model\Entity\Infogentecklead newEmptyEntity()
 * @method \App\Model\Entity\Infogentecklead newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Infogentecklead[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Infogentecklead get($primaryKey, $options = [])
 * @method \App\Model\Entity\Infogentecklead findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Infogentecklead patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Infogentecklead[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Infogentecklead|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Infogentecklead saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Infogentecklead[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Infogentecklead[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Infogentecklead[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Infogentecklead[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class InfogenteckleadsTable extends Table
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

        $this->setTable('infogenteckleads');
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
            ->scalar('refdt')
            ->maxLength('refdt', 255)
            ->requirePresence('refdt', 'create')
            ->notEmptyString('refdt');

        $validator
            ->integer('majndt')
            ->requirePresence('majndt', 'create')
            ->notEmptyString('majndt');

        $validator
            ->date('dudt')
            ->requirePresence('dudt', 'create')
            ->notEmptyDate('dudt');

        $validator
            ->scalar('Fonctiondt')
            ->maxLength('Fonctiondt', 255)
            ->requirePresence('Fonctiondt', 'create')
            ->notEmptyString('Fonctiondt');

        $validator
            ->scalar('Categoriedt')
            ->maxLength('Categoriedt', 255)
            ->requirePresence('Categoriedt', 'create')
            ->notEmptyString('Categoriedt');

        $validator
            ->scalar('Suphierdt')
            ->maxLength('Suphierdt', 255)
            ->requirePresence('Suphierdt', 'create')
            ->notEmptyString('Suphierdt');

        $validator
            ->scalar('Superdt')
            ->maxLength('Superdt', 255)
            ->requirePresence('Superdt', 'create')
            ->notEmptyString('Superdt');

        $validator
            ->scalar('Interimdt')
            ->maxLength('Interimdt', 255)
            ->requirePresence('Interimdt', 'create')
            ->notEmptyString('Interimdt');

        return $validator;
    }
}
