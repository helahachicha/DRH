<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Conjoints Model
 *
 * @property \App\Model\Table\InformationprofessionnellesTable&\Cake\ORM\Association\BelongsTo $Informationprofessionnelles
 *
 * @method \App\Model\Entity\Conjoint newEmptyEntity()
 * @method \App\Model\Entity\Conjoint newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Conjoint[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Conjoint get($primaryKey, $options = [])
 * @method \App\Model\Entity\Conjoint findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Conjoint patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Conjoint[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Conjoint|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Conjoint saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Conjoint[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Conjoint[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Conjoint[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Conjoint[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ConjointsTable extends Table
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

        $this->setTable('conjoints');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Informationprofessionnelles', [
            'foreignKey' => 'informationprofessionnelle_id',
            'joinType' => 'INNER',
        ]);
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
            ->scalar('nomprenom')
            ->maxLength('nomprenom', 255)
            ->requirePresence('nomprenom', 'create')
            ->notEmptyString('nomprenom');

        $validator
            ->date('datenaissance')
            ->requirePresence('datenaissance', 'create')
            ->notEmptyDate('datenaissance');

        $validator
            ->scalar('niveauetude')
            ->maxLength('niveauetude', 255)
            ->requirePresence('niveauetude', 'create')
            ->notEmptyString('niveauetude');

        $validator
            ->scalar('fonction')
            ->maxLength('fonction', 255)
            ->requirePresence('fonction', 'create')
            ->notEmptyString('fonction');

        $validator
            ->scalar('etat')
            ->maxLength('etat', 255)
            ->requirePresence('etat', 'create')
            ->notEmptyString('etat');

        $validator
            ->numeric('salaire')
            ->requirePresence('salaire', 'create')
            ->notEmptyString('salaire');

        $validator
            ->integer('informationprofessionnelle_id')
            ->notEmptyString('informationprofessionnelle_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('informationprofessionnelle_id', 'Informationprofessionnelles'), ['errorField' => 'informationprofessionnelle_id']);

        return $rules;
    }
}
