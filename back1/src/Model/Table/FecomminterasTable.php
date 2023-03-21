<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Fecomminteras Model
 *
 * @method \App\Model\Entity\Fecommintera newEmptyEntity()
 * @method \App\Model\Entity\Fecommintera newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Fecommintera[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Fecommintera get($primaryKey, $options = [])
 * @method \App\Model\Entity\Fecommintera findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Fecommintera patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Fecommintera[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Fecommintera|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fecommintera saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fecommintera[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Fecommintera[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Fecommintera[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Fecommintera[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FecomminterasTable extends Table
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

        $this->setTable('fecomminteras');
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
            ->integer('numeroci')
            ->requirePresence('numeroci', 'create')
            ->notEmptyString('numeroci');

        $validator
            ->scalar('indimesureci')
            ->maxLength('indimesureci', 255)
            ->requirePresence('indimesureci', 'create')
            ->notEmptyString('indimesureci');

        $validator
            ->integer('pointsci')
            ->requirePresence('pointsci', 'create')
            ->notEmptyString('pointsci');

        return $validator;
    }
}
