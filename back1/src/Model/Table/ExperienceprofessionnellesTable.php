<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Experienceprofessionnelles Model
 *
 * @property \App\Model\Table\InformationprofessionnellesTable&\Cake\ORM\Association\BelongsTo $Informationprofessionnelles
 *
 * @method \App\Model\Entity\Experienceprofessionnelle newEmptyEntity()
 * @method \App\Model\Entity\Experienceprofessionnelle newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Experienceprofessionnelle[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Experienceprofessionnelle get($primaryKey, $options = [])
 * @method \App\Model\Entity\Experienceprofessionnelle findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Experienceprofessionnelle patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Experienceprofessionnelle[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Experienceprofessionnelle|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Experienceprofessionnelle saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Experienceprofessionnelle[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Experienceprofessionnelle[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Experienceprofessionnelle[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Experienceprofessionnelle[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ExperienceprofessionnellesTable extends Table
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

        $this->setTable('experienceprofessionnelles');
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
            ->scalar('societe')
            ->maxLength('societe', 255)
            ->requirePresence('societe', 'create')
            ->notEmptyString('societe');

        $validator
            ->scalar('periode')
            ->maxLength('periode', 255)
            ->requirePresence('periode', 'create')
            ->notEmptyString('periode');

        $validator
            ->scalar('fonction')
            ->maxLength('fonction', 255)
            ->requirePresence('fonction', 'create')
            ->notEmptyString('fonction');

        $validator
            ->scalar('initiative')
            ->maxLength('initiative', 255)
            ->requirePresence('initiative', 'create')
            ->notEmptyString('initiative');

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
