<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Formaexternes Model
 *
 * @method \App\Model\Entity\Formaexterne newEmptyEntity()
 * @method \App\Model\Entity\Formaexterne newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Formaexterne[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Formaexterne get($primaryKey, $options = [])
 * @method \App\Model\Entity\Formaexterne findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Formaexterne patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Formaexterne[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Formaexterne|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Formaexterne saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Formaexterne[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Formaexterne[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Formaexterne[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Formaexterne[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FormaexternesTable extends Table
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

        $this->setTable('formaexternes');
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
            ->scalar('typecomp')
            ->maxLength('typecomp', 255)
            ->requirePresence('typecomp', 'create')
            ->notEmptyString('typecomp');

        $validator
            ->scalar('themforma')
            ->maxLength('themforma', 255)
            ->requirePresence('themforma', 'create')
            ->notEmptyString('themforma');

        $validator
            ->scalar('participant')
            ->maxLength('participant', 255)
            ->requirePresence('participant', 'create')
            ->notEmptyString('participant');

        $validator
            ->integer('nbparticipant')
            ->requirePresence('nbparticipant', 'create')
            ->notEmptyString('nbparticipant');

        $validator
            ->scalar('raisonforma')
            ->maxLength('raisonforma', 255)
            ->requirePresence('raisonforma', 'create')
            ->notEmptyString('raisonforma');

        $validator
            ->scalar('organismeforma')
            ->maxLength('organismeforma', 255)
            ->requirePresence('organismeforma', 'create')
            ->notEmptyString('organismeforma');

        $validator
            ->scalar('formalite')
            ->maxLength('formalite', 255)
            ->requirePresence('formalite', 'create')
            ->notEmptyString('formalite');

        $validator
            ->scalar('formateur')
            ->maxLength('formateur', 255)
            ->requirePresence('formateur', 'create')
            ->notEmptyString('formateur');

        $validator
            ->scalar('raisonchoix')
            ->maxLength('raisonchoix', 255)
            ->requirePresence('raisonchoix', 'create')
            ->notEmptyString('raisonchoix');

        $validator
            ->scalar('dureeforma')
            ->maxLength('dureeforma', 255)
            ->requirePresence('dureeforma', 'create')
            ->notEmptyString('dureeforma');

        $validator
            ->integer('nbjour')
            ->requirePresence('nbjour', 'create')
            ->notEmptyString('nbjour');

        $validator
            ->integer('nbhjour')
            ->requirePresence('nbhjour', 'create')
            ->notEmptyString('nbhjour');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        $validator
            ->scalar('horaireforma')
            ->maxLength('horaireforma', 255)
            ->requirePresence('horaireforma', 'create')
            ->notEmptyString('horaireforma');

        $validator
            ->scalar('pause')
            ->maxLength('pause', 255)
            ->requirePresence('pause', 'create')
            ->notEmptyString('pause');

        $validator
            ->scalar('lieuforma')
            ->maxLength('lieuforma', 255)
            ->requirePresence('lieuforma', 'create')
            ->notEmptyString('lieuforma');

        return $validator;
    }
}
