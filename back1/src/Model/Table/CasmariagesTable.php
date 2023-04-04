<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Casmariages Model
 *
 * @property \App\Model\Table\InfoprofessionnellesTable&\Cake\ORM\Association\BelongsTo $Infoprofessionnelles
 *
 * @method \App\Model\Entity\Casmariage newEmptyEntity()
 * @method \App\Model\Entity\Casmariage newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Casmariage[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Casmariage get($primaryKey, $options = [])
 * @method \App\Model\Entity\Casmariage findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Casmariage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Casmariage[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Casmariage|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Casmariage saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Casmariage[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Casmariage[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Casmariage[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Casmariage[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CasmariagesTable extends Table
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

        $this->setTable('casmariages');
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
            ->scalar('nomprenomep')
            ->maxLength('nomprenomep', 255)
            ->requirePresence('nomprenomep', 'create')
            ->notEmptyString('nomprenomep');

        $validator
            ->date('datenep')
            ->requirePresence('datenep', 'create')
            ->notEmptyDate('datenep');

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
            ->integer('salaireep')
            ->requirePresence('salaireep', 'create')
            ->notEmptyString('salaireep');

        $validator
            ->scalar('etatep')
            ->maxLength('etatep', 255)
            ->requirePresence('etatep', 'create')
            ->notEmptyString('etatep');

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
