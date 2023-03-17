<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Enfantsfr Model
 *
 * @method \App\Model\Entity\Enfantsfr newEmptyEntity()
 * @method \App\Model\Entity\Enfantsfr newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Enfantsfr[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Enfantsfr get($primaryKey, $options = [])
 * @method \App\Model\Entity\Enfantsfr findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Enfantsfr patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Enfantsfr[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Enfantsfr|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Enfantsfr saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Enfantsfr[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Enfantsfr[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Enfantsfr[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Enfantsfr[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EnfantsfrTable extends Table
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

        $this->setTable('enfantsfr');
        $this->setDisplayField('ordreen');
        $this->setPrimaryKey('ordreen');

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
            ->scalar('prenomen')
            ->maxLength('prenomen', 255)
            ->requirePresence('prenomen', 'create')
            ->notEmptyString('prenomen');

        $validator
            ->date('datenaien')
            ->requirePresence('datenaien', 'create')
            ->notEmptyDate('datenaien');

        $validator
            ->scalar('niveauetudeen')
            ->maxLength('niveauetudeen', 255)
            ->requirePresence('niveauetudeen', 'create')
            ->notEmptyString('niveauetudeen');

        $validator
            ->scalar('centreintereten')
            ->maxLength('centreintereten', 255)
            ->requirePresence('centreintereten', 'create')
            ->notEmptyString('centreintereten');

        $validator
            ->scalar('etatsanteen')
            ->maxLength('etatsanteen', 255)
            ->requirePresence('etatsanteen', 'create')
            ->notEmptyString('etatsanteen');

        return $validator;
    }
}
