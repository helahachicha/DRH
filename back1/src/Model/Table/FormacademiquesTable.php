<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Formacademiques Model
 *
 * @property \App\Model\Table\InfoprofessionnellesTable&\Cake\ORM\Association\BelongsTo $Infoprofessionnelles
 *
 * @method \App\Model\Entity\Formacademique newEmptyEntity()
 * @method \App\Model\Entity\Formacademique newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Formacademique[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Formacademique get($primaryKey, $options = [])
 * @method \App\Model\Entity\Formacademique findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Formacademique patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Formacademique[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Formacademique|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Formacademique saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Formacademique[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Formacademique[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Formacademique[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Formacademique[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FormacademiquesTable extends Table
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

        $this->setTable('formacademiques');
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
            ->scalar('niveau')
            ->maxLength('niveau', 255)
            ->requirePresence('niveau', 'create')
            ->notEmptyString('niveau');

        $validator
            ->scalar('specialite')
            ->maxLength('specialite', 255)
            ->requirePresence('specialite', 'create')
            ->notEmptyString('specialite');

        $validator
            ->scalar('annee')
            ->requirePresence('annee', 'create')
            ->notEmptyString('annee');

        $validator
            ->scalar('etablissement')
            ->maxLength('etablissement', 255)
            ->requirePresence('etablissement', 'create')
            ->notEmptyString('etablissement');

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
