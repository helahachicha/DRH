<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Expprofessionnelles Model
 *
 * @property \App\Model\Table\InfoprofessionnellesTable&\Cake\ORM\Association\BelongsTo $Infoprofessionnelles
 *
 * @method \App\Model\Entity\Expprofessionnelle newEmptyEntity()
 * @method \App\Model\Entity\Expprofessionnelle newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Expprofessionnelle[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Expprofessionnelle get($primaryKey, $options = [])
 * @method \App\Model\Entity\Expprofessionnelle findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Expprofessionnelle patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Expprofessionnelle[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Expprofessionnelle|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Expprofessionnelle saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Expprofessionnelle[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Expprofessionnelle[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Expprofessionnelle[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Expprofessionnelle[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ExpprofessionnellesTable extends Table
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

        $this->setTable('expprofessionnelles');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Infoprofessionnelles', [
            'foreignKey' => 'infoprofessionnelle_id',
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
            ->date('periode')
            ->requirePresence('periode', 'create')
            ->notEmptyDate('periode');

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
            ->integer('infoprofessionnelle_id')
            ->notEmptyString('infoprofessionnelle_id');

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
        $rules->add($rules->existsIn('infoprofessionnelle_id', 'Infoprofessionnelles'), ['errorField' => 'infoprofessionnelle_id']);

        return $rules;
    }
}
