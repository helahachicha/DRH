<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Formainternes Model
 *
 * @method \App\Model\Entity\Formainterne newEmptyEntity()
 * @method \App\Model\Entity\Formainterne newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Formainterne[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Formainterne get($primaryKey, $options = [])
 * @method \App\Model\Entity\Formainterne findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Formainterne patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Formainterne[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Formainterne|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Formainterne saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Formainterne[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Formainterne[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Formainterne[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Formainterne[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FormainternesTable extends Table
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

        $this->setTable('formainternes');
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
            ->scalar('tycomp')
            ->maxLength('tycomp', 255)
            ->requirePresence('tycomp', 'create')
            ->notEmptyString('tycomp');

        $validator
            ->scalar('themforma')
            ->maxLength('themforma', 255)
            ->requirePresence('themforma', 'create')
            ->notEmptyString('themforma');

        $validator
            ->scalar('animateur')
            ->maxLength('animateur', 255)
            ->requirePresence('animateur', 'create')
            ->notEmptyString('animateur');

        $validator
            ->scalar('poste')
            ->maxLength('poste', 255)
            ->requirePresence('poste', 'create')
            ->notEmptyString('poste');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        $validator
            ->scalar('hentrer')
            ->maxLength('hentrer', 255)
            ->requirePresence('hentrer', 'create')
            ->notEmptyString('hentrer');

        $validator
            ->scalar('hsortie')
            ->maxLength('hsortie', 255)
            ->requirePresence('hsortie', 'create')
            ->notEmptyString('hsortie');

        return $validator;
    }
}
