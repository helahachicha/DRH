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
            ->scalar('nomprenomep')
            ->maxLength('nomprenomep', 255)
            ->requirePresence('nomprenomep', 'create')
            ->notEmptyString('nomprenomep');

        $validator
            ->date('datenaissanceep')
            ->requirePresence('datenaissanceep', 'create')
            ->notEmptyDate('datenaissanceep');

        $validator
            ->scalar('niveauetudeep')
            ->maxLength('niveauetudeep', 255)
            ->requirePresence('niveauetudeep', 'create')
            ->notEmptyString('niveauetudeep');

        $validator
            ->scalar('fonctionep')
            ->maxLength('fonctionep', 255)
            ->requirePresence('fonctionep', 'create')
            ->notEmptyString('fonctionep');

        $validator
            ->scalar('etatep')
            ->maxLength('etatep', 255)
            ->requirePresence('etatep', 'create')
            ->notEmptyString('etatep');

        $validator
            ->numeric('salaireep')
            ->requirePresence('salaireep', 'create')
            ->notEmptyString('salaireep');

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
