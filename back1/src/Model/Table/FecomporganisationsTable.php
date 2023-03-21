<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Fecomporganisations Model
 *
 * @method \App\Model\Entity\Fecomporganisation newEmptyEntity()
 * @method \App\Model\Entity\Fecomporganisation newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Fecomporganisation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Fecomporganisation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Fecomporganisation findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Fecomporganisation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Fecomporganisation[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Fecomporganisation|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fecomporganisation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fecomporganisation[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Fecomporganisation[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Fecomporganisation[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Fecomporganisation[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FecomporganisationsTable extends Table
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

        $this->setTable('fecomporganisations');
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
            ->integer('numeroco')
            ->requirePresence('numeroco', 'create')
            ->notEmptyString('numeroco');

        $validator
            ->scalar('indimesureco')
            ->maxLength('indimesureco', 255)
            ->requirePresence('indimesureco', 'create')
            ->notEmptyString('indimesureco');

        $validator
            ->integer('pointsco')
            ->requirePresence('pointsco', 'create')
            ->notEmptyString('pointsco');

        return $validator;
    }
}
