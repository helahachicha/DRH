<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Infogenconfimes Model
 *
 * @method \App\Model\Entity\Infogenconfime newEmptyEntity()
 * @method \App\Model\Entity\Infogenconfime newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Infogenconfime[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Infogenconfime get($primaryKey, $options = [])
 * @method \App\Model\Entity\Infogenconfime findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Infogenconfime patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Infogenconfime[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Infogenconfime|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Infogenconfime saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Infogenconfime[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Infogenconfime[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Infogenconfime[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Infogenconfime[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class InfogenconfimesTable extends Table
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

        $this->setTable('infogenconfimes');
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
            ->integer('majndc')
            ->requirePresence('majndc', 'create')
            ->notEmptyString('majndc');

        $validator
            ->date('dudc')
            ->requirePresence('dudc', 'create')
            ->notEmptyDate('dudc');

        $validator
            ->scalar('Fonctiondc')
            ->maxLength('Fonctiondc', 255)
            ->requirePresence('Fonctiondc', 'create')
            ->notEmptyString('Fonctiondc');

        $validator
            ->scalar('categoriedc')
            ->maxLength('categoriedc', 255)
            ->requirePresence('categoriedc', 'create')
            ->notEmptyString('categoriedc');

        $validator
            ->scalar('Suphierdc')
            ->maxLength('Suphierdc', 255)
            ->requirePresence('Suphierdc', 'create')
            ->notEmptyString('Suphierdc');

        $validator
            ->scalar('Superdc')
            ->maxLength('Superdc', 255)
            ->requirePresence('Superdc', 'create')
            ->notEmptyString('Superdc');

        $validator
            ->scalar('interidc')
            ->maxLength('interidc', 255)
            ->requirePresence('interidc', 'create')
            ->notEmptyString('interidc');

        return $validator;
    }
}
